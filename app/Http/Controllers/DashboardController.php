<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class DashboardController extends Controller
{

    public function dashboard()
    {
        $taskTodo = Task::where('status', 'todo')->get();
        $taskInProgress = Task::where('status', 'inProgress')->get();
        $taskIssue = Task::where('status', 'issue')->get();
        $taskDone = Task::where('status', 'done')->get();

        return view('pages.dashboard.dashboard')->with('taskTodo', $taskTodo)->with('taskInProgress', $taskInProgress)->with('taskIssue', $taskIssue)->with('taskDone', $taskDone);
    }

    //todo
    public function insertTodoDash(Request $request)
    {

        $validateTask = $request->validate(
            [
                'task_title' => 'required',
            ],
            [
                'task_title.required' => 'Please enter task title',
            ]
        );

        $tasks = new Task();
        $tasks->task_title = $request->task_title;
        $tasks->status = 'todo';
        $tasks->save();

        $taskTodo = Task::where('status', 'todo')->get();
        $taskInProgress = Task::where('status', 'inProgress')->get();
        $taskIssue = Task::where('status', 'issue')->get();
        $taskDone = Task::where('status', 'done')->get();

        return view('pages.dashboard.dashboard')->with('taskTodo', $taskTodo)->with('taskInProgress', $taskInProgress)->with('taskIssue', $taskIssue)->with('taskDone', $taskDone);
    }

    //in-progress
    public function insertInProgressDash(Request $request)
    {

        $validateTask = $request->validate(
            [
                'task_title' => 'required',
            ],
            [
                'task_title.required' => 'Please enter task title',
            ]
        );

        $tasks = new Task();
        $tasks->task_title = $request->task_title;
        $tasks->status = 'inProgress';
        $tasks->save();

        $taskTodo = Task::where('status', 'todo')->get();
        $taskInProgress = Task::where('status', 'inProgress')->get();
        $taskIssue = Task::where('status', 'issue')->get();
        $taskDone = Task::where('status', 'done')->get();

        return view('pages.dashboard.dashboard')->with('taskTodo', $taskTodo)->with('taskInProgress', $taskInProgress)->with('taskIssue', $taskIssue)->with('taskDone', $taskDone);
    }

    //issue
    public function insertIssueDash(Request $request)
    {

        $validateTask = $request->validate(
            [
                'task_title' => 'required',
            ],
            [
                'task_title.required' => 'Please enter task title',
            ]
        );

        $tasks = new Task();
        $tasks->task_title = $request->task_title;
        $tasks->status = 'issue';
        $tasks->save();

        $taskTodo = Task::where('status', 'todo')->get();
        $taskInProgress = Task::where('status', 'inProgress')->get();
        $taskIssue = Task::where('status', 'issue')->get();
        $taskDone = Task::where('status', 'done')->get();

        return view('pages.dashboard.dashboard')->with('taskTodo', $taskTodo)->with('taskInProgress', $taskInProgress)->with('taskIssue', $taskIssue)->with('taskDone', $taskDone);
    }

    //done
    public function insertDoneDash(Request $request)
    {

        $validateTask = $request->validate(
            [
                'task_title' => 'required',
            ],
            [
                'task_title.required' => 'Please enter task title',
            ]
        );

        $tasks = new Task();
        $tasks->task_title = $request->task_title;
        $tasks->status = 'done';
        $tasks->save();

        $taskTodo = Task::where('status', 'todo')->get();
        $taskInProgress = Task::where('status', 'inProgress')->get();
        $taskIssue = Task::where('status', 'issue')->get();
        $taskDone = Task::where('status', 'done')->get();

        return view('pages.dashboard.dashboard')->with('taskTodo', $taskTodo)->with('taskInProgress', $taskInProgress)->with('taskIssue', $taskIssue)->with('taskDone', $taskDone);
    }
}
