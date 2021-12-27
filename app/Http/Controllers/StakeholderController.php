<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

use App\Models\Stakeholder;

class StakeholderController extends Controller
{
    public function show_holder_page(){
        $fetch_holder=Stakeholder::all();
        return view('admin.stake_holders.stake_holder',['fetch_holder'=>$fetch_holder]);
    } 

    public function add_holder_page(){
        return view('admin.stake_holders.add_holders');
    }
    public function upload_holder(Request $request){
        
        // $validation = $request->validate([
        //     'name'=>'required|min:8|max:255',
        //     'img'=>'required|image',
        //     'discription'=>'required',
            
        // ]);
        $upload_holders=new Stakeholder();

        $upload_holders->name = $request->name;
        


    $upload_holders->save();

    $notification = array(
        'message' => 'You have Successfully Upload Your Data',
        'alert-type' => 'success'
    );
    return redirect('/stake_holder')->with($notification);

    }

    public function update_holder($id){

        $update_holder=Stakeholder::find($id);
        

        return view('admin.stake_holders.update_holders',compact('update_holder'));
    }
    public function edit_holder(Request $request,$id){

        $update_holder=Stakeholder::find($id);
        
        
        $update_holder->name = $request->name;
        

        $update_holder->save();

        $notification = array(
            'message' => 'You have Successfully Update Your Data',
            'alert-type' => 'success'
        );
        return redirect('/stake_holder')->with($notification);

    }

    public function delete_holder($id){

        $delete_holder=Stakeholder::find($id);

        $delete_holder->delete();

        $notification = array(
            'message' => 'Data Deleted Successfully',
            'alert-type' => 'error'
        );
        return back()->with($notification);

    }

     
} 
