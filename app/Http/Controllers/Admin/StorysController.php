<?php
/** dev: Stephen Isaac:  ofuzak@gmail.com>.
 *Skype: ofuzak
 */
namespace App\Http\Controllers\Admin ;
use App\Http\Controllers\Controller;
use App\Story;
use Illuminate\Http\Request;
use JsValidator;
use Yajra\Datatables\Datatables;

class StorysController extends Controller
{


    /**
     * Display a listing of the resource. (uses ajax table)
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
       $storys = Story::all();
		  return view('Admin/Storys.index',compact('storys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
		//$this->authorize('create', Story::class);


        return view('admin.owner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
		$this->authorize('create', Story::class);


        $story = new  Story;
		$story->title = $request->title;
		$story->content = $request->content;
		$story->save();
		return response()->json(['status' => 'SUCCESS','message' => __('Story Added Successfully')]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show(Story $story)
    {

       // $story = Story::findOrFail($id);
        return view('Admin/Storys.show', compact('story'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit(Request $request, Story $story)
    {
		$this->authorize('update', $story);
        //$story = Story::findOrFail($id);
		//add the jsvalidator


        return view('Admin/Storys.edit', compact('story', '', 'jsvalidator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Story $story)
    {
		$this->authorize('update', $story);

        $requestData = $request->all();

        //$story->update($requestData);
		$story->title = $request->title;
		$story->content = $request->content;
		$story->save();
		return response()->json(['status' => 'SUCCESS','message' => __('Story Updated Successfully' )]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Request $request, Story $story)
    {
		$this->authorize('delete', $story);
		$story->delete();
		return response()->json(['status' => 'SUCCESS','message' => __('Story Deleted Successfully')]);

    }

	  /**toggle Item status.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function toggle_status(Request $request, Story $story)
    {
		$this->authorize('update', $story);
		$story->active = $story->active? false:true;
		$story->save();
		$action= $story->active ?  __('Activated'): __('Deactivated');

		return response()->json(['status' => 'SUCCESS','message' => __('Story '.$action.' Successfuly')]);

    }

	/**
     * Remove the specified resources from storage.
     *
     * @param  Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete(Request $request)
    {

		if(!count($request->ids))
		return response()->json(['status' => 'SUCCESS','message' => __('Nothing Selected')]);
		$storys = Story::findMany($request->ids);
		foreach ($storys as $story ){
			$this->authorize('delete', $story);
		}
        Story::destroy($request->ids);
		return response()->json(['status' => 'SUCCESS','message' => __('All Selected Items Have Been Deleted')]);
    }

	  /**toggle Item status.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function toggle_statuses(Request $request)
    {
		if(!count($request->ids))
		return response()->json(['status' => 'SUCCESS','message' => __('Nothing Selected')]);
		$storys = Story::findMany($request->ids);
		foreach ($storys as $story ){
			$this->authorize('delete', $story);
		}
        Story::whereIn('id', $request->ids)->update(['active'=>$request->status]);
		$action= $request->status == 1 ?  __('Activated'): __('Deactivated');
		return response()->json(['status' => 'SUCCESS','message' => __('Story '.$action.' Successfully')]);
    }

	/**
     * Get the Table.
     *
     *
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
	 public function table(){
		 $story = Story::query();
		$table = Datatables::of($story)
			->rawColumns(['active','id','actions'])
			->setRowId(function ($item) {
				return $item->id ;
			})
			->editColumn('id', function ($item) {
				return '<input name="ids[]" class="chkbx" type="checkbox" value="'.$item->id.'"/>';
			})
			->editColumn('active', function ($item) {
				$name = __('Inactive');
				$label = 'danger';
				if($item->active){
					$name = __('Active');;
					$label = 'success';
				}
				return '<a data-table="Story" class="ajax_link refresh btn btn-sm btn-'.$label.'" href="'.route('admin..storys.toggle_status', $item->id).'" data-toggle="tooltip" title="'.__('Edit').'"> '.$name.' </a>';

			})
			->addColumn('actions', function ($item) {
				 return'<a href="'.route('admin..storys.edit', $item->id) .'" title="'.__('Edit').' Story"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> '.__('Edit').'</button></a>
				 <a href="'.route('admin..storys.destroy' , $item->id) .'"  data-_method="DELETE"  data-title="Please Confirm Delete" data-message="Do your really want to Delete this Story? This Action cannot be reversed" data-table="Story" class="ajax_link refresh mr-2 confirm btn btn-danger btn-sm" title="'.__('Delete').'Story" ><i class="fa fa-trash" aria-hidden="true"></i></a>';
			}) ;

      return $table->toJson();
	}
}
