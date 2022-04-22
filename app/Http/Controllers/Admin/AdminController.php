<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class AdminController extends Controller
{
    function check(Request $request){
        //Validate Inputs
        $request->validate ([
            'email'=>'required|email|exists:admins,email',
            'password'=>'required|min:5|max:30',
        ],[
            'email.exists'=>'This email is not exists on user table.'
        ]);

        $creds = $request -> only('email','password');
        if(Auth::guard('admin')->attempt($creds)) {
            return redirect()->route('admin.home');
        } else{
            return redirect()->route('admin.login')->with('fails','Incorrect Credentials');
        }
    }

    function pfupdate(Request $request){
        //Validate Inputs
        $request->validate ([
            'name'=>'required',
            'email'=>'required|email|unique:doctors,email',
            'image' => 'required|image|mimes:jpeg,jpg',
        ]);

        $admins_id = Auth::guard('admin')->user()->id;
        $admins = Admin::findOrFail($admins_id);

        $admins->name = $request->input('name');
        $admins->age = $request->input('age');
        $admins->position = $request->input('position') ;
        $admins->address = $request->input('address');
        $admins->phone = $request->input('phone');
        $admins->email = $request->input('email');
        $admins->description = $request->input('description');

        if($request->hasfile('image'))
        {
            $destination = 'uploads/profile/'.$admins->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/profile/',$filename);
            $admins->image = $filename;
        }
        $admins->update();
        if($admins){
            return redirect()->route('admin.profile')->with('success','You are now register successfully.');
        }else{
            return redirect()->back()->with('Fail','Something went wrong, failed to register.');
        };


    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }
}
