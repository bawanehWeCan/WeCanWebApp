<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $data = Service::paginate(5);
        return view('dashboard.services.index',compact('data'));
    }

    public function create()
    {
        return view('dashboard.services.add_service');
    }

    public function store(ServiceRequest $request)
    {

        // if ($request->hasFile('pic')) {


        //     $image = $request->file('pic');
        //     $file_name = $image->getClientOriginalName();


        //     $services = new Service();
        //     $services->image = $file_name;
        //     $services->name = $request->name;

        //     $services->price = $request->price;

        //     $services->heading1 = $request->heading1;
        //     $services->content1 = $request->content1;
        //     $services->heading2 = $request->heading2;
        //     $services->content2 = $request->content2;
        //     $services->features = $request->features;

        //     $services->save();


        //     // move pic
        //     $imageName = $request->pic->getClientOriginalName();
        //     $request->pic->move(public_path('Services/'), $imageName);
        //}

        $service=new Service();
        $service->image=$service->setImageAttribute($request->file('pic'));

             $service->name = $request->name;

            $service->price = $request->price;

            $service->heading1 = $request->heading1;
            $service->content1 = $request->content1;
            $service->heading2 = $request->heading2;
            $service->content2 = $request->content2;
            $service->features = $request->features;

            $service->save();


        return redirect()->route('admin.services')
                        ->with('success','تم إضافة الخدمة بنجاح');
    }

    public function destroy(Request $request)
    {
        Service::find($request->id)->delete();
        return redirect()->route('admin.services')->with('success','تم حذف الخدمة بنجاح');
    }

}
