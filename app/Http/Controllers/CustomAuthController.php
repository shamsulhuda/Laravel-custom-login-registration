<?php

namespace App\Http\Controllers;
use App\User;
use Hash;
use Auth;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function showRegisterForm(){
        return view('custom.register');
    }

    public function showLoginForm(){
        return view('custom.login');
    }

    public function register(Request $request){

        $this->validate($request, [
            'fname'=>'required|max:255',
            'lname'=>'required|max:255',
            'email'=>'required|email|unique:users|max:255',
            'password'=>'required|confirmed|max:255'
        ],[
            'fname.required'=>'First Name is required',
            'lname.required'=>'Last Name is required',
            'email.required'=>'Your Email is required',
            'password.required'=>'Your password field is required'
        ]);

        $password = Hash::make($request->input('password'));

        $test =User::create([
           'password'=>$password,
            'fname'=>$request->input('fname'),
            'lname'=>$request->input('lname'),
            'email'=>$request->input('email'),
        ]);
        // dd($test);

        return redirect('/')->with('Status', 'You are registered!');

    }

    public function login(Request $request){

        $this->validate($request, [
            'email'=>'required|email|max:255',
            'password'=>'required|max:255'
        ],[
            'email.required'=>'Email field is required',
            'password.required'=>'Password field is required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])) {
            
            return redirect('/')->with('Login', 'You are logged in!');
        }
    }


    public function destroy(){
        Auth::logout();
        return redirect('/');
    }

  
}
