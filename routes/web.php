<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Backend\DashboardController;
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
Route::get('/app', function () {
    return view('backend.pages.dashboard');
});

Auth::routes([
    'register'         => false, //404 Disabled
    'password.confirm' => false, //404 Disabled
    'password.email'   => false, //404 Disabled
    'password.request' => false, //404 Disabled
    'password.reset'   => false, //404 Disabled
    'password.update'  => false, //404 Disabled
]);


// ------------------- Authinthication -------------------- //
Route::get('signup', [AuthController::class, 'signupForm']);
Route::post('signup', [AuthController::class, 'signupStore'])->name('signup.store');
Route::get('signin', [AuthController::class, 'signin']);
Route::get('forget-password', [AuthController::class, 'forgetPassword']);

// --------------- Auth Dashboard ---------------//
Route::prefix('app')->name('app.')->middleware('auth', 'is_verify','permission')->group(function(){
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
});