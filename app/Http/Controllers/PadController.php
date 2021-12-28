<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Company;
use App\Models\Pad;

class PadController extends Controller
{
    public function show_pad_page(){
        $fetch_pad=Pad::all();
        return view('admin.letter_pad.letter_pad',['fetch_pad'=>$fetch_pad]);
    }

    public function add_pad_page(){
        $fetch_Service=Service::all();
        $fetch_Company=Company::all();
        return view('admin.letter_pad.add_padd',['fetch_Service'=>$fetch_Service,'fetch_Company'=>$fetch_Company]);
    }
    public function upload_pad(Request $request){

        $validation = $request->validate([
            'service_name'=>'required',
            'company_name'=>'required',
            'machine_number'=>'required|numeric',

        ]);
        $upload_pad=new Pad();

        $upload_pad->service_name = $request->service_name;
        $upload_pad->company_name = $request->company_name;
        $upload_pad->date = $request->date;
        $upload_pad->machine_number = $request->machine_number;
        $upload_pad->site = $request->site;
        $upload_pad->concrete_quantity = $request->concrete_quantity;
        $upload_pad->working_hours = $request->working_hours;
        $upload_pad->bill = $request->bill;


    $upload_pad->save();

    $notification = array(
        'message' => 'You have Successfully Upload Your Data',
        'alert-type' => 'success'
    );
    return back()->with($notification);

    }

    public function update_pad($id){

        $update_pad=Pad::find($id);
        $fetch_Service=Service::all();
        $fetch_Company=Company::all();

        return view('admin.letter_pad.update_pad',compact('update_pad'),['fetch_Service'=>$fetch_Service,'fetch_Company'=>$fetch_Company]);
    }
    public function edit_pad(Request $request,$id){

        $update_pad=Pad::find($id);

        $update_pad->date = $request->date;
        $update_pad->machine_number = $request->machine_number;
        $update_pad->site = $request->site;
        $update_pad->concrete_quantity = $request->concrete_quantity;
        $update_pad->working_hours = $request->working_hours;
        $update_pad->bill = $request->bill;


    $update_pad->save();


        $notification = array(
            'message' => 'You have Successfully Update Your Data',
            'alert-type' => 'success'
        );
        return redirect('/letter_pad')->with($notification);

    }

    public function delete_pad($id){

        $delete_pad=Pad::find($id);

        $delete_pad->delete();

        $notification = array(
            'message' => 'Data Deleted Successfully',
            'alert-type' => 'error'
        );
        return back()->with($notification);

    }


}
