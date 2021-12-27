<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function users_list(){

        $users = User::all();

        return view('admin.users.view_user',compact('users'));

    }

    public function show_password()
    {
        return view('admin.users.show_password');
    }

    public function update_password(Request $request){

        // $request->validate([
        //     'old_password'=> 'required',
        //     'new_password'=> 'required|confirmed',
        // ]);

        // dd($request->all());
        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->old_password,$hashedPassword))   {
            $user = user::find(Auth::id());
            $user->password = Hash::make($request->new_password);
            $user->save();
            Auth::logout();
            return redirect()->route('login');
       }else{
        $notification = array(
    		'message' => 'Password is Incorrect',
    		'alert-type' => 'error'
    	);
        return redirect()->back()->with($notification);
       }


    }

    public function users_list_update(Request $request){

        $data = Auth::user();
        $data->name = $request->name;
    	$data->email = $request->email;
        $data->save();

        $notification = array(
    		'message' => 'Profile  Updated Successfully',
    		'alert-type' => 'success'
    	);
        return redirect()->back()->with($notification);

    }
    public function users_list_delete($id){
        $data = user::find($id);
        $data->delete();
        $notification = array(
    		'message' => 'Profile Deleted Successfully',
    		'alert-type' => 'error'
    	);
        return redirect()->route('users.list')->with($notification);

    }

    public function profile(){


    return view('admin.users.view_profile');
    }
}
