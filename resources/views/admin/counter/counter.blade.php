@extends('layouts.dashboard')

@section('content')
    @can('add_counter')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4>Counter List</h4>
                </div>
                @if (session('counterdel'))
                <div class="alert alert-success">{{session('counterdel')}}</div>
                @endif
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>SL</th>
                            <th>Number</th>
                            <th>Title</th>
                            <th>Acrion</th>
                        </tr>

                        @foreach ($counters as $counter)
                        <tr>
                            <td>{{$counter->sl_num}}</td>
                            <td>{{$counter->number}}</td>
                            <td>{{$counter->title}}</td>
                            <td>
                                <form action="{{route('counter.edit')}}" method="GET" class="d-inline">
                                    @csrf
                                    <button name="counter_id" value="{{$counter->id}}" class="btn btn-primary">Edit</button>
                                </form>
                                <a href="{{route('counter.delete', $counter->id)}}" class="btn btn-danger">Delete</a>
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
                    <h4>Add Counter</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('counter.store')}}" method="POST">
                        @csrf
                        @if (session('countersucc'))
                        <div class="alert alert-success">{{session('countersucc')}}</div>
                        @endif
                        <div class="mb-3">
                            <label>SL Number</label>
                            <input type="number" class="form-control" name="sl_num">
                            @error('sl_num')
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Number</label>
                            <input type="number" class="form-control" name="number">
                            @error('number')
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title">
                            @error('title')
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Add Counter</button>
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
