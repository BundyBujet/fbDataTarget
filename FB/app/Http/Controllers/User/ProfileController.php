<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function edit(){
        return view('user.profile');
    }

    public function update(Request $request, $id){
        // $request->validate([
        //     'file'=>'maxsize:200M'
        //    ]);
        $to_update = User::findorfail($id);
        if($request->file('image')!= null ) {
            $image= $request->file('image')->getClientOriginalName();   
            $path= $request->file('image')->storeAs('users',$image,'fbdata');

        $to_update->name= $request->input('name');
        $to_update->image= $path;
        $to_update->save();
        } else {
            $to_update->name= $request->input('name');
            $to_update->save();
        }
    



        return redirect('user/profile')->with([
            'status'=>'updeted'
        ]);
    }
    
}
