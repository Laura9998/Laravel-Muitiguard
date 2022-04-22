<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function create(Request $request){
        //Validate Inputs
        $request->validate ([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password'
        ]);

        $user = new user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        $save = $user->save();

        if($save){
            return redirect()->back()->with('success','You are now register successfully.');
        }else{
            return redirect()->back()->with('Fail','Something went wrong, failed to register.');
        };

    }

    function check(Request $request){
        //Validate Inputs
        $request->validate ([
            'email'=>'required|email|exists:users,email',
            'password'=>'required|min:5|max:30',
        ],[
            'email.exists'=>'This email is not exists on user table.'
        ]);

        $creds = $request -> only('email','password');
        if(Auth::attempt($creds)) {
            return redirect()->route('user.home');
        } else{
            return redirect()->route('user.login')->with('fails','Incorrect Credentials');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }
}
