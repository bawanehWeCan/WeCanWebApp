<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::orderBy('id','DESC')->paginate(5);
        return view('dashboard.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',

        ],[

            'name.required' =>'يرجي ادخال اسم المستخدم',
            'email.unique' =>'البريد الإلكتروني مسجل مسبقا',
            'email.required' =>'يرجي ادخال البريد الإلكتروني',
            'email.email'=>'يرجى إدخال البريد الإلكتروني بشكل صحيح',
            'password.required'=>'يرجى إدخال كلمة السر'

        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $input['user_type']=0;

        $user = User::create($input);


        return redirect()->route('dashboard.index')
                        ->with('success','تم اضافة المستخدم بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        User::find($request->user_id)->delete();
        return redirect()->route('dashboard.index')->with('success','تم حذف المستخدم بنجاح');
    }
}
