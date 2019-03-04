<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function logout() {
        return redirect('login')->with(Auth::logout());
    }
}
