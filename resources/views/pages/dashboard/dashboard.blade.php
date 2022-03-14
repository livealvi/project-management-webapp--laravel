@extends('layouts.app')
@section('content')
<!-- To Do Modal -->
<div class="modal fade" id="todoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">To Do</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('add/todo')}}" method="post">
                    {{csrf_field()}}
                    {{-- for error --}}
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example Title: <span
                                class="fw-bold">Next Meeting at Day 5</span></label>
                        <textarea class="form-control" id="task_title" name="task_title" rows="3"></textarea>
                        {{-- show error message --}}
                        @error('task_title')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- In progress Modal -->
<div class="modal fade" id="inProgressModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">In Profress</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('add/in-progress')}}" method="post">
                    {{csrf_field()}}
                    {{-- for error --}}
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example Title: <span
                                class="fw-bold">Building Landing Page</span></label>
                        <textarea class="form-control" id="task_title" name="task_title" rows="3"></textarea>
                        {{-- show error message --}}
                        @error('task_title')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Issue Modal -->
<div class="modal fade" id="issueModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Issue</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('add/issues-list')}}" method="post">
                    {{csrf_field()}}
                    {{-- for error --}}
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example Title: <span
                                class="fw-bold">Bug found on save button</span></label>
                        <textarea class="form-control" id="task_title" name="task_title" rows="3"></textarea>
                        {{-- show error message --}}
                        @error('task_title')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Done Modal -->
<div class="modal fade" id="doneModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Done</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('add/done')}}" method="post">
                    {{csrf_field()}}
                    {{-- for error --}}
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example Title: <span
                                class="fw-bold">App Build Succesfull</span></label>
                        <textarea class="form-control" id="task_title" name="task_title" rows="3"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="mb-4">
    <div class="mt-4">
        <h2>Dashboard</h2>
    </div>
    {{-- serach-box --}}
    <div class="row d-flex justify-content-left">
        <div class="search-box">
            <div class="search">
                <i class="fa fa-search"></i>
                <input type="text" class="form-control" placeholder="search firist issue">
                <button class="btn btn-primary">Search</button>
            </div>
        </div>
    </div>
    {{-- card --}}
    <div class="mt-5">
        <div class="row">
            {{-- to-do --}}
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span class="text-uppercase fw-bold">To Do</span>
                            <span class="fw-light">
                                {{count($taskTodo)}}
                            </span>
                        </h5>
                        {{-- fectch-data --}}
                        @foreach($taskTodo as $taskTodo )
                        <a href="/todo-edit/{{$taskTodo->id}}">
                            <div class="inside-card">
                                <div class="card-body">
                                    <h5 class="card-title">{{$taskTodo->task_title}}</h5>
                                </div>
                            </div>
                        </a>
                        @endforeach
                        {{-- fectch-data --}}
                    </div>
                    {{-- Create Issue - modal button --}}
                    <div data-bs-toggle="modal" data-bs-target="#todoModal"
                        class=" create-issue d-flex align-items-center justify-content-center text-center p-3 mb-3">
                        <div class="">
                            <i class="fa fa-plus"></i>
                            <span class="ms-3">Create Issue</span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- in progress --}}
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span class="text-uppercase fw-bold">In progress</span>
                            <span class="fw-light">
                                {{count($taskInProgress)}}
                            </span>
                        </h5>
                        {{-- fectch-data --}}
                        @foreach($taskInProgress as $inProgress )
                        <a href="/in-progress-edit/{{$inProgress->id}}">
                            <div class="inside-card">
                                <div class="card-body">
                                    <h5 class="card-title">{{$inProgress->task_title}}</h5>
                                </div>
                            </div>
                        </a>
                        @endforeach
                        {{-- fectch-data --}}
                    </div>
                    {{-- Create Issue - modal button --}}
                    <div data-bs-toggle="modal" data-bs-target="#inProgressModal"
                        class=" create-issue d-flex align-items-center justify-content-center text-center p-3 mb-3">
                        <div class="">
                            <i class="fa fa-plus"></i>
                            <span class="ms-3">Create Issue</span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- issue --}}
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span class="text-uppercase fw-bold">Issue</span>
                            <span class="fw-light">
                                {{count($taskIssue)}}
                            </span>
                        </h5>
                        {{-- fectch-data --}}
                        @foreach($taskIssue as $issue )
                        <a href="/issue-edit/{{$issue->id}}">
                            <div class="inside-card">
                                <div class="card-body">
                                    <h5 class="card-title">{{$issue->task_title}}</h5>
                                </div>
                            </div>
                        </a>
                        @endforeach
                        {{-- fectch-data --}}
                    </div>
                    {{-- Create Issue - modal button --}}
                    <div data-bs-toggle="modal" data-bs-target="#issueModal"
                        class=" create-issue d-flex align-items-center justify-content-center text-center p-3 mb-3">
                        <div class="">
                            <i class="fa fa-plus"></i>
                            <span class="ms-3">Create Issue</span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- done --}}
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span class="text-uppercase fw-bold">Done</span>
                            <span class="fw-light">
                                {{count($taskDone)}}
                            </span>
                        </h5>
                        {{-- fectch-data --}}
                        @foreach($taskDone as $done )
                        <a href="/done-edit/{{$done->id}}">
                            <div class="inside-card">
                                <div class="card-body">
                                    <h5 class="card-title">{{$done->task_title}}</h5>
                                </div>
                            </div>
                        </a>
                        @endforeach
                        {{-- fectch-data --}}
                    </div>
                    {{-- Create Issue - modal button --}}
                    <div data-bs-toggle="modal" data-bs-target="#doneModal"
                        class=" create-issue d-flex align-items-center justify-content-center text-center p-3 mb-3">
                        <div class="">
                            <i class="fa fa-plus"></i>
                            <span class="ms-3">Create Issue</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection