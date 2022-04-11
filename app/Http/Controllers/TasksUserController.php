<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTasks_UserRequest;
use App\Http\Requests\UpdateTasks_UserRequest;
use App\Models\Tasks_User;
use App\Models\Task;
use App\Models\User;

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

    public function getTasksByUser($id)
    {
        $task = Task::where('id', $id)->first();
        $mappings = $task->taskUserMappings;

        $task = Task::where('id', $mappings[0]['task_id'])->first();
        $user = User::where('id', $mappings[0]['user_id'])->first();
        return view('pages.task-by-user.task-by-user')->with('allData', $mappings)->with('task', $task)->with('user', $user);
    }
}
