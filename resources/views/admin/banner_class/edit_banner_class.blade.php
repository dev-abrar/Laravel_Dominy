@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-4 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Banner Class</h4>
                </div>
                <div class="card-body">
                    @if (session('banner_up'))
                        <div class="alert alert-success">{{session('banner_up')}}</div>
                    @endif
                    <form action="{{route('banner.update')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label>Class Name</label>
                            <input type="hidden" name="ban_id" value="{{$ban_info->id}}">
                            <input type="text" class="form-control" name="banner_class" value="{{$ban_info->banner_class}}">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="suubmit">Add Class</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection