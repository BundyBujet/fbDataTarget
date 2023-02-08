<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Data;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetDataController extends Controller
{
    public function get_data(){
        return view('user.getdata');
    }
    public function find_data(Request $request, $id){
 
         $request->validate([
           'table'=>'required',
        //  'quary'=>'required',
        //  'name'=>'required',
        //  'quary'=>'required',
        //  'quary'=>'required',
        //  'quary'=>'required',
         ]);
       
        if($request->input('table')=='data'){ 
            $datas=Data::where('name','like','%'.$request->input('name').'%')->where('address','like','%'.$request->input('address').'%')
            ->where('eduction','like','%'.$request->input('eduction').'%')
            ->where('job','like','%'.$request->input('job').'%')->get();
            $points=$datas->count();
            if ($points <= (auth()->user()->points)  ) {
                if($datas->count()){
            
                    
                    $to_update = User::findorfail($id);
                    $to_update->points= (auth()->user()->points) - $points;
                    $to_update->save();
                return view('user.datatable')->with(['datas'=>$datas ]);
                }else{
                    
                    return redirect('user/getdata')->with([
                        'status'=>'there is not found'
                    ]);
                }
            } else {
                return redirect('user/getdata')->with([
                    'message'=>' your points are not enought to search please charge your points '
                ]);
                
            }
        }elseif($request->input('table')=='canda'){
            $datas=Canda::where('frist_name','like','%'.$request->input('name').'%')->where('id','like','%'.$request->input('id').'%')
            ->where('eduction','like','%'.$request->input('eduction').'%')
            ->where('job','like','%'.$request->input('job').'%')->get();
            $points=$datas->count();
            if ($points <= (auth()->user()->points)  ) {
                if($datas->count()){
            
                    
                    $to_update = User::findorfail($id);
                    $to_update->points= (auth()->user()->points) - $points;
                    $to_update->save();
                return view('user.datatable')->with(['datas'=>$datas ]);
                }else{
                    
                    return redirect('user/getdata')->with([
                        'status'=>'there is not found'
                    ]);
                }
            } else {
                return redirect('user/getdata')->with([
                    'message'=>' your points are not enought to search please charge your points '
                ]);
                
            }

        }
        else {
            
            return redirect('user/getdata')->with([
                'messg'=>'there is not select'
            ]);
        }
        
    }
   
}
