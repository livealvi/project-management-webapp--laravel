<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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

    // login validation
    public function loginValidator(Request $request)
    {
        $validate = $request->validate(
            [
                'email' => 'required|regex:/\S+@\S+\.\S+/',
                'password' => 'required'
            ],
            [
                'email.required' => 'Please enter valid email',
            ]
        );

        $user = User::where('email', $request->email)->where('password', $request->password)->first();

        if ($user && $user->role == 'admin') {
            $request->session()->put('user', [$user->user_name, $user->role]);
            return redirect()->route('dashboard');
        } elseif ($user && $user->role == 'manager') {
            $request->session()->put('user', [$user->user_name, $user->role]);
            return redirect()->route('dashboard');
        } elseif ($user && $user->role == 'tester') {
            $request->session()->put('user', [$user->user_name, $user->role]);
            return redirect()->route('dashboard');
        } elseif ($user && $user->role == 'developer') {
            $request->session()->put('user', [$user->user_name, $user->role]);
            return redirect()->route('dashboard');
        }
        return back();
    }

    public function logout()
    {
        session()->forget('user');
        return redirect()->route('login');
    }
}
