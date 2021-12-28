<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ledger;

class LedgerController extends Controller
{
    public function show_ledger_page(){
        $fetch_ledger=Ledger::all();
        return view('admin.ledger.ledger',['fetch_ledger'=>$fetch_ledger]);
    }

    public function add_ledger_page(){
        return view('admin.ledger.add_ledger');
    }
    public function upload_ledger(Request $request){

        $validation = $request->validate([
            'date'=>'required|integer',


        ]);
        $upload_ledger=new Ledger();

        $upload_ledger->date = $request->date;
        $upload_ledger->machine_number = $request->machine_number;
        $upload_ledger->site = $request->site;
        $upload_ledger->concrete_hours = $request->concrete_hours;

        $upload_ledger->bill = $request->bill;


    $upload_ledger->save();

    $notification = array(
        'message' => 'You have Successfully Upload Your Data',
        'alert-type' => 'success'
    );
    return redirect('/ledger')->with($notification);

    }

    public function update_ledger($id){

        $update_ledger=Ledger::find($id);


        return view('admin.ledger.update_ledger',compact('update_ledger'));
    }
    public function edit_ledger(Request $request,$id){

        $update_ledger=Ledger::find($id);


        $update_ledger->date = $request->date;
        $update_ledger->machine_number = $request->machine_number;
        $update_ledger->site = $request->site;
        $update_ledger->concrete_hours = $request->concrete_hours;

        $update_ledger->bill = $request->bill;

        $update_ledger->save();

        $notification = array(
            'message' => 'You have Successfully Update Your Data',
            'alert-type' => 'success'
        );
        return redirect('/ledger')->with($notification);

    }

    public function delete_ledger($id){

        $delete_ledger=Ledger::find($id);

        $delete_ledger->delete();

        $notification = array(
            'message' => 'Data Deleted Successfully',
            'alert-type' => 'error'
        );
        return back()->with($notification);


    }



}
