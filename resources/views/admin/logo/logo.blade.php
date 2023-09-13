@extends('layouts.dashboard')

@section('content')
@can('logo_list')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>Logo List</h4>
            </div>
            @if (session('logodel'))
                <div class="alert alert-success">{{session('logodel')}}</div>
            @endif
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Logo</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($logos as $sl=>$logo)
                        <tr>
                            <td>{{$sl+1}}</td>
                            <td>
                                <img  src="{{asset('upload/logo')}}/{{$logo->logo}}" alt="">
                            </td>
                            <td>
                                <a href="{{route('logo.delete', $logo->id)}}" class="btn btn-danger">Delete</a>
                                <a href="{{route('logo.status', $logo->id)}}" class="btn btn-{{$logo->status == 0?'secondary':'primary'}}">{{$logo->status == 0?'Deactive':'Active'}}</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h4>Add logo</h4>
            </div>
            <div class="card-body">
                <form action="{{route('logo.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        @if (session('logoadd'))
                            <div class="alert alert-success">{{session('logoadd')}}</div>
                        @endif
                        <label>Logo Name</label>
                        <input type="text" class="form-control" name="logo_name">
                        @error('logo_name')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Logo</label>
                        <input type="file" class="form-control" name="logo">
                        @error('logo')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Add Logo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@else
    <h4 class="text-danger">Unfortunately, you don't have access For this page.</h4>
@endcan
   
@endsection