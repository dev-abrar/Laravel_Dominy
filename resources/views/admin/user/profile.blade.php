@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h4>Edit User Info</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('user.update')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h4>Edit User Password</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('user.password')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            @if (session('passsucc'))
                                <div class="alert alert-success">{{session('passsucc')}}</div>
                            @endif
                            <label>Old Password</label>
                            <input type="password" class="form-control" name="old_password">
                            @error('old_password')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                            @if (session('old_wrong'))
                                <strong class="text-danger">{{session('old_wrong')}}</strong>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label>New Password</label>
                            <input type="password" class="form-control" name="password">
                            @error('password')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation">
                            @error('password_confirmation')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h4>Edit User Password</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('user.photo')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            @if (session('profilesucc'))
                                <div class="alert alert-success">{{session('profilesucc')}}</div>
                            @endif
                            <label>Profile Picture</label>
                            <input type="file" class="form-control" name="photo">
                            @error('photo')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection