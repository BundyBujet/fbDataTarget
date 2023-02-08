<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class ShowUsersController extends Controller
{
    public function show_users(){
        $users= User::Orderby('created_at','desc')->get();
         return view('admin.showusers',compact('users'));
     }
 
     public function search_users(Request $request){
 
         $request->validate([
          'user'=>'required'
         ]);
         $q=$request->input('user') ;
         $fliterusers = User::where('name','like','%'.$q.'%')->orwhere('id','like','%'.$q.'%')->get();
         if($fliterusers->count()){
          return view('admin.showusers')->with(['users'=>$fliterusers]);
         }else{
             
             return redirect('admin/showusers')->with([
                 'status'=>'there is not found'
             ]);
         }
     }
     public function edit_users($id){
         //return $id;
         return view('admin.editusers',['user'=>User::findorfail($id)]);
     }
     public function edit_points_users(Request $request, $id){
         $request->validate([
             'points'=>'required|integer',
                
         ]);
         $to_update = User::findorfail($id);
         $to_update->points=strip_tags($request->input('points')) ;
         $to_update->save();
        // $users= User::Orderby('created_at','desc')->get();
         return redirect()->route('admin.show.users');
     }
 
     public function delete($id){
        User::findorfail($id)->delete();
        return redirect()->route('admin.show.users');
     }
}
