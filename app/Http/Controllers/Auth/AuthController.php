<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function signupForm(){
        return view('frontend.auth.register');
    }

    public function signupStore(RegisterRequest $request){
        $data = $request->except('_token', 'password', 'password_confirmation');
        $data['password'] = Hash::make($request->password);
        $data['role_id'] = 3;
        User::create($data);
        return back()->with('success', 'Registration Completed Successfully.');
    }

    public function signin(){
        return view('frontend.auth.login');
    }

    public function forgetPassword(){
        return view('frontend.auth.forget');
    }
}
