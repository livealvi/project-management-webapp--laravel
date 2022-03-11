@extends('layouts.app')
@section('content')
<div class="mb-4">
    <div class="mt-4">
        <h2>Dashboard</h2>
    </div>
    <div class="row d-flex justify-content-left">
        <div class="search-box">
            <div class="search">
                <i class="fa fa-search"></i>
                <input type="text" class="form-control" placeholder="search firist issue">
                <button class="btn btn-primary">Search</button>
            </div>
        </div>
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
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span class="text-uppercase fw-bold">To Do</span> <span class="fw-light">3</span>
                        </h5>
                        <p class="card-text">Issue</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span class="text-uppercase fw-bold">In progress</span> <span class="fw-light">3</span>
                        </h5>
                        <p class="card-text">Issue</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span class="text-uppercase fw-bold">Issue</span> <span class="fw-light">3</span>
                        </h5>
                        <p class="card-text">Issue</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span class="text-uppercase fw-bold">Done</span> <span class="fw-light">3</span>
                        </h5>
                        <div class="inside-card">
                            <div class="card-body">
                                <h5 class="card-title">Done</h5>
                                <p class="card-text">Issue</p>
                            </div>
                        </div>
                        <div class="inside-card">
                            <div class="card-body">
                                <h5 class="card-title">Done</h5>
                                <p class="card-text">Issue</p>
                            </div>
                        </div>
                        <div class="inside-card">
                            <div class="card-body">
                                <h5 class="card-title">Done</h5>
                                <p class="card-text">Issue</p>
                            </div>
                        </div>
                    </div>
                    <div class=" create-issue d-flex align-items-center justify-content-center text-center p-3 mb-3">
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