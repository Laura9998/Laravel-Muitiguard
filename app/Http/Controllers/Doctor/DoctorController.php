<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Doctor;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    function create(Request $request){
        //Validate Inputs
        $request->validate ([
            'name'=>'required',
            'email'=>'required|email|unique:doctors,email',
            'hospital'=>'required',
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password'
        ]);

        $doctor = new doctor();
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->hospital = $request->hospital;
        $doctor->password = \Hash::make($request->password);
        $save = $doctor->save();
        
        if($save){
            return redirect()->back()->with('success','You are now register successfully.');
        }else{
            return redirect()->back()->with('Fail','Something went wrong, failed to register.');
        };

    }

    function check(Request $request){
        //Validate Inputs
        $request->validate ([
            'email'=>'required|email|exists:doctors,email',
            'password'=>'required|min:5|max:30',
        ],[
            'email.exists'=>'This email is not exists on user table.'
        ]);

        $creds = $request -> only('email','password');
        if(Auth::guard('doctor')->attempt($creds)) {
            return redirect()->route('doctor.home');
        } else{
            return redirect()->route('doctor.login')->with('fails','Incorrect Credentials');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }
}
