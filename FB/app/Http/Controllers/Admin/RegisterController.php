<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
   public function get_register(){
    return view('admin.auth.register');
   }
   public function register(Request $request){
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);
    $user= new User();
    $user->name=$request->input('name');
    $user->email=$request->input('email');
    $user->password=Hash::make($request->input('password'));

    return redirect()->route('admin.dashboard');
   }
  
}
