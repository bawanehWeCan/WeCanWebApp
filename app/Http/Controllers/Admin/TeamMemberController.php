<?php

namespace App\Http\Controllers\Admin;

use App\Models\TeamMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TeamMemberRequest;

class TeamMemberController extends Controller
{
    public function index()
    {
        $data = TeamMember::paginate(5);
        return view('dashboard.team-members.index',compact('data'));
    }

    public function create()
    {
        return view('dashboard.team-members.add-team-member');
    }

    public function store(TeamMemberRequest $request)
    {

        TeamMember::create($request->all());


        return redirect()->route('admin.members')
                        ->with('success','تم إضافة العضو بنجاح');
    }

    public function destroy(Request $request)
    {
        $member = TeamMember::find($request->id);
        $member->delete();
        if ($member) {
            unlink($member->image);
        }
        return redirect()->route('admin.members')->with('success','تم حذف العضو بنجاح');
    }
}
