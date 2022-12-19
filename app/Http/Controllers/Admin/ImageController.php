<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Requests\ImageRequest;
use App\Http\Controllers\Controller;
use App\Models\Project;

class ImageController extends Controller
{
    public function index()
    {
        $data = Image::with('project')->paginate(5);
        return view('dashboard.project-images.index',compact('data'));
    }

    public function create()
    {
        $projects = Project::select('id','name')->get();
        return view('dashboard.project-images.add-image',compact('projects'));
    }

    public function store(ImageRequest $request)
    {
        foreach ($request->images as $image) {
            Image::create([
                'image'=>$image,
                'project_id'=>$request->project_id,
            ]);
        }

        return redirect()->route('admin.images')
                        ->with('success','تم إضافة الصورة بنجاح');
    }

    public function destroy(Request $request)
    {
        $image = Image::find($request->id);
        $image->delete();
        if ($image) {
            unlink($image->image);
        }
        return redirect()->route('admin.images')->with('success','تم حذف الصورة بنجاح');
    }

}
