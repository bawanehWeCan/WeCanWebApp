<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Story;
use Illuminate\Http\Request;
use App\Http\Requests\StoryRequest;

class StoryController extends Controller
{
    public function index()
    {
        $data = Story::paginate(5);
        return view('dashboard.stories.index', compact('data'));
    }

    public function create()
    {
        $data = Story::paginate(5);
        return view('dashboard.stories.add_story', compact('data'));
    }

    public function store(StoryRequest $request)
    {


        $story = new Story();

        $story->image = $request->pic;
        $story->avater = $request->av;
        $story->name = $request->name;
        $story->content = $request->content;



        $story->save();

        return redirect()->route('admin.stories')
            ->with('success', 'تم إضافة القصة بنجاح');
    }

    public function destroy(Request $request)
    {
        Story::find($request->id)->delete();
        return redirect()->route('admin.stories')->with('success', 'تم حذف القصة بنجاح');
    }
}
