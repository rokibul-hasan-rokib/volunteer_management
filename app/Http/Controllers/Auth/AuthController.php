<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loadRegister(){
        return view('frontend.register.register');
    }


    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        alert_success('User created successfully');
        // Redirect to the questions page with user ID
        return redirect()->route('login.page');
    }

    public function loadLogin(){
        return view('frontend.login.login');
    }

    public function userLogin(Request $request){
        $request->validate([
            'email'=>'required|string|email',
            'password'=>'required',
        ]);

        $userCredential = $request->only('email','password');
        if(Auth::attempt($userCredential)){
            alert_success('User Login successfully');
            return redirect('/dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        alert_success('User Logout successfully');
        return redirect('/login');
    }
}
