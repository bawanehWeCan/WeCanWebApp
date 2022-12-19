<?php

namespace App\Http\Controllers\Admin;

use App\Models\Story;
use Illuminate\Http\Request;
use App\Http\Requests\StoryRequest;
use App\Http\Controllers\Controller;

class StoryController extends Controller
{
    public function index()
    {
        $data = Story::paginate(5);
        return view('dashboard.stories.index',compact('data'));
    }

    public function create()
    {
        return view('dashboard.stories.add-story');
    }

    public function store(StoryRequest $request)
    {

        Story::create($request->all());


        return redirect()->route('admin.stories')
                        ->with('success','تم إضافة قصة بنجاح');
    }

    public function destroy(Request $request)
    {
        $story = Story::find($request->id);
        $story->delete();
        if ($story) {
            unlink($story->avater);
            unlink($story->image);
        }
        return redirect()->route('admin.stories')->with('success','تم حذف قصة بنجاح');
    }
}
