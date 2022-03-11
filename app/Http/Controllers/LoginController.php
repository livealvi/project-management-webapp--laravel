<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //home
    public function index()
    {
        return view('home');
    }

    //login
    public function login()
    {
        return view('pages.form.login');
    }
}
