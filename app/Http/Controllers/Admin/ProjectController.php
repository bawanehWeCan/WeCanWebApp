<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use App\Models\Service;

class ProjectController extends Controller
{
    public function index()
    {
        $data = Project::paginate(5);
        return view('dashboard.projects.index', compact('data'));
    }

    public function create()
    {
        $data = Service::paginate(5);
        return view('dashboard.projects.add_project', compact('data'));
    }

    public function store(ProjectRequest $request)
    {

        // if ($request->hasFile('pic')) {


        //     $image = $request->file('pic');
        //     $file_name = $image->getClientOriginalName();


        //     $projects = new Project();
        //     $projects->image = $file_name;
        //     $projects->name = $request->name;
        //     $projects->service_id = $request->select_ser;
        //     $projects->content = $request->content;


        //     $projects->save();
        //     /

        //     // move pic
        //     $imageName = $request->pic->getClientOriginalName();
        //     $request->pic->move(public_path('Services/'), $imageName);
        // }

        $project = new Project();
        // $project->image=$project->setImageAttribute($request->file('pic'));
        $project->name = $request->name;
        $project->image = $request->pic;
        $project->service_id = $request->select_ser;
        $project->content = $request->content;


        $project->save();

        return redirect()->route('admin.projects')
            ->with('success', 'تم إضافة المشروع بنجاح');
    }

    public function destroy(Request $request)
    {
        Project::find($request->id)->delete();
        return redirect()->route('admin.projects')->with('success', 'تم حذف المشروع بنجاح');
    }
}
