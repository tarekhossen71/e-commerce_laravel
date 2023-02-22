<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    public function dashboard(){
        Gate::authorize('app.dashboard');
        return view('backend.pages.dashboard');
    }
}
