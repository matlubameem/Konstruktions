<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function showLogin()
    {
        return view('back_end.auth.login');
    }

    public function processLogin(Request $request)
    {
    }

}
