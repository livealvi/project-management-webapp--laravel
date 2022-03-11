<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTasks_UserRequest;
use App\Http\Requests\UpdateTasks_UserRequest;
use App\Models\Tasks_User;

class TasksUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTasks_UserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTasks_UserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tasks_User  $tasks_User
     * @return \Illuminate\Http\Response
     */
    public function show(Tasks_User $tasks_User)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tasks_User  $tasks_User
     * @return \Illuminate\Http\Response
     */
    public function edit(Tasks_User $tasks_User)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTasks_UserRequest  $request
     * @param  \App\Models\Tasks_User  $tasks_User
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTasks_UserRequest $request, Tasks_User $tasks_User)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tasks_User  $tasks_User
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tasks_User $tasks_User)
    {
        //
    }
}
