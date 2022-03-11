<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //dashboard
    public function index()
    {
        return view('pages.dashboard.dashboard');
    }

    //login
    public function login()
    {
        return view('pages.form.login');
    }
}
