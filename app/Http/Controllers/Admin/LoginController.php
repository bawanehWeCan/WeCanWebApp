<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AdminLoginRequest;

class LoginController extends Controller
{

   public function getLogin(){
    return view('dashboard.auth.login');
    }
public function postLogin(AdminLoginRequest $request){

 $remember_me = $request->has('remember_me') ? true : false;
 if (Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')],$remember_me)){
     return redirect()->route('admin.dashboard');
 }
 return redirect()->back()->with('error',"خطأ في بيانات تسجيل الدخول");
}

public function logout(){
    Auth::logout();
    return redirect()->route('admin.login');
}


}
