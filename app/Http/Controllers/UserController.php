<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('pages.user.list-user')->with('users', $users);
    }

    public function addUser()
    {
        return view('pages.user.add-user');
    }

    public function insertUser(Request $request)
    {
        $validateUser = $request->validate(
            [
                'role' => 'required',
                'user_name' => 'required',
                'email' => 'required|regex:/\S+@\S+\.\S+/',
                'password' => 'required',
                'address' => 'required',
                'phone' => 'required|regex:/^([0-9\(\)\/\+ \-]*)$/',
                'joiningDate' => 'required',
                'status' => 'required',
                'team_id' => 'required'
            ],
            [
                'name.required' => 'Please put your name',
                'name.min' => 'Name must be greater than 5 characters',
                'password.required' => 'Please put your password',
                'name.min' => 'Password must be greater than 5 & strong'
            ]
        );

        $users = new User();
        $users->role = $request->role;
        $users->user_name = $request->user_name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->address = $request->address;
        $users->phone = $request->phone;
        $users->joiningDate = $request->joiningDate;
        $users->status = $request->status;
        $users->team_id = $request->team_id;
        $users->save();

        $users = User::all();
        return view('pages.user.list-user')->with('users', $users);
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        return view('pages.user.edit-user');
    }

    public function destroy(User $user)
    {
        //
    }
}
