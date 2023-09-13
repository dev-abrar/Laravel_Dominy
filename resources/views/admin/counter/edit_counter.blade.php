@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-4 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Counter Info</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('counter.update')}}" method="POST">
                        @csrf
                        @if (session('counterupdate'))
                            <div class="alert alert-success">{{session('counterupdate')}}</div>
                        @endif
                        <div class="mb-3">
                            <label>SL Number</label>
                            <input type="hidden" name="counter_id" value="{{$counter_info->id}}">
                            <input type="number" class="form-control" name="sl_num" value="{{$counter_info->sl_num}}">
                        </div>
                        <div class="mb-3">
                            <label>Number</label>
                            <input type="number" class="form-control" name="number" value="{{$counter_info->number}}">
                        </div>
                        <div class="mb-3">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="{{$counter_info->title}}">
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