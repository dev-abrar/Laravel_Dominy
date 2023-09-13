@extends('layouts.dashboard')

@section('content')
@can('add_new_work')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4>Work List</h4>
                </div>
                <div class="card-body">
                    @if (session('work_del'))
                        <div class="alert alert-success">{{session('work_del')}}</div>
                    @endif
                    <table class="table table-striped">
                        <tr>
                            <th>SL</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($works as $sl=>$work)
                            <tr>
                                <td>{{$sl+1}}</td>
                                <td>{{$work->title}}</td>
                                <td>{{substr($work->desp, 0, 20)}}</td>
                                <td>
                                    <img src="{{asset('upload/work')}}/{{$work->work}}" alt="">
                                </td>
                                <td>
                                    <form action="{{route('work.edit')}}" method="GET" class="d-inline">
                                    @csrf
                                        <button name="work_id" value="{{$work->id}}" class="btn btn-primary">Edit</button>
                                    </form>
                                    <a href="{{route('work.delete', $work->id)}}" class="btn btn-danger">Delete</a>
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
                    <h4>Add New Work</h4>
                </div>
                <div class="card-body">
                    @if (session('work'))
                        <div class="alert alert-success">{{session('work')}}</div>
                    @endif
                    <form action="{{route('work.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title">
                            @error('title')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <textarea class="form-control" name="desp"></textarea>
                            @error('desp')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Image</label>
                            <input type="file" class="form-control" name="work">
                            @error('work')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Add Work</button>
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