<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = User::paginate(5);
        return view('dashboard.users.index',compact('data'));
    }

    public function create()
    {
        return view('dashboard.users.add_user');
    }

    public function store(UserRequest $request)
    {
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $input['user_type']=0;

        $user = User::create($input);


        return redirect()->route('admin.users')
                        ->with('success','تم اضافة المستخدم بنجاح');
    }

    public function destroy(Request $request)
    {
        User::find($request->user_id)->delete();
        return redirect()->route('admin.users')->with('success','تم حذف المستخدم بنجاح');
    }
}
