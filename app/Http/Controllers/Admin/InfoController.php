<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests\InfoRequest;
use App\Http\Controllers\Controller;
use App\Models\Info;

class InfoController extends Controller
{
    public function index()
    {
        $data = Info::paginate(5);
        return view('dashboard.infos.index',compact('data'));
    }

    public function create()
    {
        return view('dashboard.infos.add_info');
    }

    public function store(InfoRequest $request)
    {

        Info::create($request->all());


        return redirect()->route('admin.infos')
                        ->with('success','تم إضافة المعلومة بنجاح');
    }

    public function destroy(Request $request)
    {
        Info::find($request->id)->delete();
        return redirect()->route('admin.infos')->with('success','تم حذف المعلومة بنجاح');
    }
}
