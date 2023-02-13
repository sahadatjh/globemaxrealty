<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Validator;
use App\Models\User;
use Auth;
use File;
use Hash;

class AuthController extends Controller
{
    public function login(){
    	return view('admin.auth.login');
    }
	public function LoginAction(Request $request){
    	$request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = [
        	'email' => $request->email,
        	'password' => $request->password,
        ];
        if (Auth::attempt($credentials)) {
            $notification = array(
                'message' => 'Welcome To Admin Pannel!',
                'alert-type' => 'success'
            );
            return redirect('/admin')->with($notification);
        }else{
        	return back()->withErrors('User Or Password Is Wrong');
        }
    }

    public function profileEdit($id){
    	return view('admin.auth.edit-profile');
    }

    public function profileUpdate(Request $request, $id){
    	$request->validate([
    		'name' => 'required',
    		'email' => 'required|unique:users,id,'.$id,
    		'password' => 'nullable',
    		'password_confirmation' => 'same:password',
    		'image' => 'nullable|mimes:jpg,png,jpeg,gif',
    	]);
    	if($request->password && $request->file('image')){
    		if(Hash::check($request->old_password, Auth::user()->password)){
                if(Auth::user()->image != ''  && Auth::user()->image != null){
                    $old_file = Auth::user()->image;
                    if(file_exists($old_file)){
                        File::delete($old_file);
                    }
                }
    			$coverPhoto = $request->image;
	            $getExt = $coverPhoto->getClientOriginalExtension();
	            $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
	            $destination ='upload/admin-image/';
	            $image = $destination.$modifiedName;
	            $coverPhoto->move( $destination ,$modifiedName );

	    		User::find($id)->update([
	    			'name' => $request->name,
	    			'email' => $request->email,
	    			'password' => bcrypt($request->password),
	    			'image' => $image,
	    		]);
    		}else{
    			return back()->with('error', 'Old Password Not Matched');
    		}
    	}else if($request->password){
    		if(Hash::check($request->old_password, Auth::user()->password)){
    			User::find($id)->update([
	    			'name' => $request->name,
	    			'email' => $request->email,
	    			'password' => bcrypt($request->password),
	    		]);
    		}else{
    			return back()->with('error', 'Old Password Not Matched');
    		}
    	}else if($request->file('image')){
    		if(Auth::user()->image != ''  && Auth::user()->image != null){
                $old_file = Auth::user()->image;
                if(file_exists($old_file)){
                    File::delete($old_file);
                }
            }
    		$coverPhoto = $request->image;
            $getExt = $coverPhoto->getClientOriginalExtension();
            $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
            $destination ='upload/admin-image/';
            $image = $destination.$modifiedName;
            $coverPhoto->move( $destination ,$modifiedName );

    		User::find($id)->update([
    			'name' => $request->name,
    			'email' => $request->email,
    			'image' => $image,
    		]);
    	}else{
    		User::find($id)->update([
    			'name' => $request->name,
    			'email' => $request->email,
    		]);
    	}
    	return back()->with('message', 'Admin Info Updated');
    }









    public function logout(Request $request) {
	  	Auth::logout();
	  	return redirect('admin/login');
  	}
}
