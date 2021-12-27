<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

class ServiceController extends Controller
{
    
    public function show_services_page(){
        $fetch_service=Service::all();
        return view('admin.services.service',['fetch_service'=>$fetch_service]);
    }
     
    public function add_services_page(){
        return view('admin.services.add_service');
    }
    public function upload_services(Request $request){
        
        // $validation = $request->validate([
        //     'name'=>'required|min:8|max:255',
        //     'img'=>'required|image',
        //     'discription'=>'required',
            
        // ]);
        $upload_service=new Service();

        $upload_service->service_name = $request->service_name;
        


    $upload_service->save();

    $notification = array(
        'message' => 'You have Successfully Upload Your Data',
        'alert-type' => 'success'
    );
    return redirect('/services')->with($notification);

    }
    
    public function update_services($id){

        $update_service=Service::find($id);
        

        return view('admin.services.update_service',compact('update_service'));
    }
    public function edit_services(Request $request,$id){

        $update_service=Service::find($id);
        
        
        $update_service->service_name = $request->service_name;
        

        $update_service->save();

        $notification = array(
            'message' => 'You have Successfully Update Your Data',
            'alert-type' => 'success'
        );
        return redirect('/services')->with($notification);

    }

    public function delete_services($id){

        $delete_service=Service::find($id);

        $delete_service->delete();

        $notification = array(
            'message' => 'Data Deleted Successfully',
            'alert-type' => 'error'
        );
        return back()->with($notification);

    }

   

}
