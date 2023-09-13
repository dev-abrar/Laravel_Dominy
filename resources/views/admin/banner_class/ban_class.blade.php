@extends('layouts.dashboard')

@section('content')
    @can('add_banner_class')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4>Banner Class List</h4>
                </div>
                <div class="card-body">
                    @if (session('banner_del'))
                        <div class="alert alert-success">{{session('banner_del')}}</div>
                    @endif
                    <table class="table table-striped">
                        <tr>
                            <th>SL</th>
                            <th>Banner Class</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($banners as $sl=>$banner)
                            <tr>
                                <td>{{$sl+1}}</td>
                                <td>{{$banner->banner_class}}</td>
                                <td>
                                    <form action="{{route('banner.edit')}}" method="GET" class="d-inline">
                                        @csrf
                                        <button name="ban_id" value="{{$banner->id}}" class="btn btn-primary">Edit</button>
                                    </form>
                                    <a href="{{route('banner.delete', $banner->id)}}" class="btn btn-danger">Delete</a>
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
                    <h4>Add Banner Class</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('banner.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            @if (session('banner'))
                                <div class="alert alert-success">{{session('banner')}}</div>
                            @endif
                            <label>Class Name</label>
                            <input type="text" class="form-control" name="banner_class">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="suubmit">Add Class</button>
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