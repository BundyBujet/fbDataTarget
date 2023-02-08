<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function get_admin_login(){
        return view('admin.auth.login');
    }
    public function login(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',   
        ]);
        if(auth()->guard('admin')->attempt(['email'=>$request->input('email'),'password'=>$request->input('password')])){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect('admin/login')->with([
                'message'=>'the email or password is not correct'
            ]);
        }
    }
    public function logout(){
        auth()->logout();
        return redirect()->route('get.admin.login');
    }
}
