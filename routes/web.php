<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.pages.front');
});

Auth::routes([
    'register'         => false, //404 Disabled
    'password.confirm' => false, //404 Disabled
    'password.email'   => false, //404 Disabled
    'password.request' => false, //404 Disabled
    'password.reset'   => false, //404 Disabled
    'password.update'  => false, //404 Disabled
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ------------------- Authinthication -------------------- //
Route::get('signup', [AuthController::class, 'signupForm']);
Route::post('signup', [AuthController::class, 'signupStore'])->name('signup.store');
Route::get('signin', [AuthController::class, 'signin']);
Route::get('forget-password', [AuthController::class, 'forgetPassword']);
