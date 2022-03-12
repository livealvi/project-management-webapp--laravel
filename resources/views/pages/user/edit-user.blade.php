@extends('layouts.app')
@section('content')
<div class="mb-4">
    <div class="mt-4">
        <h2>User > Edit</h2>
    </div>

    <div class="d-flex justify-content-center mt-5">
        <div class="user_edit">
            <div class="user_edit__form">
                <form action="{{route('user/insert')}}" method="post" class="needs-validation">
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
                    <div class="user_edit__form__box">
                        {{-- role --}}
                        <div class="mb-3">
                            <label for="role" class="form-label">Role</label>
                            <select class="form-select" name="role" aria-label="Default select example">
                                <option selected>Not Selected</option>
                                <option value="admin">Admin</option>
                                <option value="tester">Manager</option>
                                <option value="developer">Tester</option>
                                <option value="developer">Developer</option>
                            </select>
                            {{-- show error message --}}
                            @error('address')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        {{-- name --}}
                        <div class="mb-3">
                            <label for="user_name" class="form-label">Name</label>
                            <input type="name" class="form-control" id="user_name" name="user_name"
                                placeholder="Your name" value="">
                            {{-- show error message --}}
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        {{-- email --}}
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="your@email.com"
                                value="">
                            {{-- show error message --}}
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        {{-- DOB --}}
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="text" class="form-control" id="password" name="password" value="">
                            {{-- show error message --}}
                            @error('passowrd')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        {{-- phone --}}
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address"
                                placeholder="Your Address" value="">
                            {{-- show error message --}}
                            @error('address')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        {{-- phoen --}}
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="">
                            {{-- show error message --}}
                            @error('phone')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="user_edit__form__box">
                        {{-- joiningDate --}}
                        <div class="mb-3">
                            <label for="joiningDate" class="form-label">Joining Date</label>
                            <input type="date" class="form-control" id="joiningDate" name="joiningDate" value="">
                            {{-- show error message --}}
                            @error('joiningDate')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        {{-- photo --}}
                        <div class="mb-3">
                            <label for="photo" class="form-label">Photo</label>
                            <input type="name" class="form-control" id="status" name="status" placeholder="Your name"
                                value="">
                            {{-- show error message --}}
                            @error('status')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        {{-- status --}}
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" name="status" aria-label="Default select example">
                                <option selected>Not Selected</option>
                                <option value="valid">Valid</option>
                                <option value="invalid">Invalid</option>
                            </select>
                            {{-- show error message --}}
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        {{-- team --}}
                        <div class="mb-3">
                            <label for="team" class="form-label">Assign Team</label>
                            <select class="form-select" name="team" aria-label="Default select example">
                                <option selected>Not Selected</option>
                                <option value="manager">Manager</option>
                                <option value="tester">Tester</option>
                                <option value="developer">Developer</option>
                            </select>
                            {{-- show error message --}}
                            @error('team')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    {{-- submit --}}
                    <div class="user_edit__form__box_button">
                        <button type="submit" class="btn btn-primary">Regester</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection