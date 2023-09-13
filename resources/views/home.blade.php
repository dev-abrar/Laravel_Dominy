@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-6 m-auto">
        <div class="card">
            <div class="card-header">
                <h5>Welcome to dashboard</h5>
            </div>
            <div class="card-body">
                <h4>You are Logged In, <span class="text-danger">{{Auth::user()->name}}</span></h4>
            </div>
        </div>
    </div>
</div>
@endsection