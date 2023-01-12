<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signupForm(){
        return view('frontend.auth.register');
    }

    public function signupStore(Request $request){
        dd($request->all());
    }

    public function signin(){
        return view('frontend.auth.login');
    }

    public function forgetPassword(){
        return view('frontend.auth.forget');
    }
}
