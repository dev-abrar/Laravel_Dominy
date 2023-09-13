@extends('layouts.dashboard')

@section('content')
@can('add_testimonial')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4>Testimonial</h4>
                </div>
                <div class="card-body">
                    @if (session('test_del'))
                        <div class="alert alert-success">{{session('test_del')}}</div>
                    @endif
                    <table class="table table-bordered">
                        <tr>
                            <th>Client Name</th>
                            <th>Country</th>
                            <th>Description</th>
                            <th>Picture</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($testimonial as $test)
                            <tr>
                                <td>{{$test->test_name}}</td>
                                <td>{{$test->country}}</td>
                                <td>{{substr($test->desp, 0, 20)}}</td>
                                <td>
                                    @if ($test->test_img != null)
                                    <img src="{{asset('upload/testimonial')}}/{{$test->test_img}}" alt="">
                                    @else
                                    <img src="{{ Avatar::create($test->test_name)->toBase64() }}" />
                                    @endif
                                </td>
                                <td>
                                    <form action="{{route('test.edit')}}" method="GET" class="d-inline">
                                        <button name="test_id" value="{{$test->id}}" class="btn btn-primary">Edit</button>
                                    </form>
                                    <a href="{{route('test.delete', $test->id)}}" class="btn btn-danger">Delete</a>
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
                    <h4>Add Testimonial</h4>
                </div>
                @if (session('test'))
                    <div class="alert alert-success">{{session('test')}}</div>
                @endif
                <div class="card-body">
                    <form action="{{route('test.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label>Client Name</label>
                        <input type="text" class="form-control" name="test_name">
                        @error('test_name')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Country</label>
                        <input type="text" class="form-control" name="country">
                        @error('country')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Description</label>
                        <textarea name="desp" class="form-control"></textarea>
                        @error('desp')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Picture</label>
                        <input type="file" class="form-control" name="test_img" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                        @error('test_img')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
                        <img width="100" src="" id="blah" alt="">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Submit</button>
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