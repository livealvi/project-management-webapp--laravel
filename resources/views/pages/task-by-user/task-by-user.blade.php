@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center mt-5">
    <div class="table-responsive w-100">
        <table class="table table-hover table-bordered text-center ">
            <thead>
                <tr class="text-center align-middle">
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Task ID</th>
                    <th scope="col">Task</th>
                    <th scope="col">User ID</th>
                    <th scope="col">User</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                @foreach($allData as $count=>$data )
                <tr>
                    <th scope="row">{{++$count ? ++$count : "N/A"}}</th>
                    <td>{{$data->id ? $data->id : "N/A"}}</td>
                    <td>{{$data->task_id ? $data->task_id : "N/A"}}</td>
                    <td>{{$task->task_title ? $task->task_title : "N/A"}}</td>
                    <td>{{$data->user_id ? $data->user_id : "N/A"}}</td>
                    <td>{{$user->user_name ? $user->user_name : "N/A"}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection