<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller

{

    public function show_companies_page(){
        $fetch_company=company::all();
        return view('admin.company.company',['fetch_company'=>$fetch_company]);
    }

    public function add_companies_page(){
        return view('admin.company.add_company');
    }
    public function upload_companies(Request $request){

        // $validation = $request->validate([
        //     'name'=>'required|min:8|max:255',
        //     'img'=>'required|image',
        //     'discription'=>'required',

        // ]);
        $upload_companies=new company();

        $upload_companies->company_name = $request->company_name;



    $upload_companies->save();

    $notification = array(
        'message' => 'You have Successfully Upload Your Data',
        'alert-type' => 'success'
    );
    return redirect('/companies')->with($notification);

    }

    public function update_companies($id){

        $update_companies=company::find($id);
        return view('admin.company.update_company',compact('update_companies'));
    }
    public function edit_companies(Request $request,$id){

        $edit_companies=company::find($id);


        $edit_companies->company_name = $request->company_name;


        $edit_companies->save();

        $notification = array(
            'message' => 'You have Successfully Update Your Data',
            'alert-type' => 'success'
        );
        return redirect('/companies')->with($notification);
    }

    public function delete_companies($id){

        $delete_companies=company::find($id);

        $delete_companies->delete();

        $notification = array(
            'message' => 'Data Deleted Successfully',
            'alert-type' => 'error'
        );
        return redirect('/companies')->with($notification);

    }



}


