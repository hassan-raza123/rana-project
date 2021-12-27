<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class WorkerController extends Controller
{
    public function show_worker_page(){
        $fetch_worker=Worker::all();
        return view('admin.workers.workers',['fetch_worker'=>$fetch_worker]);
    }
     
    public function add_worker_page(){
        return view('admin.workers.add_workers');
    }
    public function upload_workers(Request $request){
        
        // $validation = $request->validate([
        //     'name'=>'required|min:8|max:255',
        //     'img'=>'required|image',
        //     'discription'=>'required',
            
        // ]);
        $upload_workers=new Worker();

        $upload_workers->name = $request->name;
        $upload_workers->job_Position = $request->job_Position;
        $upload_workers->since = $request->since;
        $upload_workers->salary = $request->salary;


    $upload_workers->save();

    $notification = array(
        'message' => 'You have Successfully Update Your Data',
        'alert-type' => 'success'
    );
    return redirect('/workers')->with($notification);

    }
    
    public function update_worker($id){

        $update_worker=Worker::find($id);
        

        return view('admin.workers.update_worker',compact('update_worker'));
    }
    public function edit_workers(Request $request,$id){

        $update_worker=Worker::find($id);
        
        
        $update_worker->name = $request->name;
        $update_worker->job_Position = $request->job_Position;
        $update_worker->since = $request->since;
        $update_worker->salary = $request->salary;

        $update_worker->save();

        $notification = array(
            'message' => 'You have Successfully Update Your Data',
            'alert-type' => 'success'
        );
        return redirect('/workers')->with($notification);
    
    }

    public function delete_worker($id){

        $delete_worker=Worker::find($id);

        $delete_worker->delete();

        $notification = array(
            'message' => 'Data Deleted Successfully',
            'alert-type' => 'error'
        );
        return back()->with($notification);
    
    }
}
