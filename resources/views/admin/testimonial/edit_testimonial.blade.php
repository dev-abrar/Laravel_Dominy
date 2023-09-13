@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Add Testimonial</h4>
                </div>
                @if (session('test_up'))
                    <div class="alert alert-success">{{session('test_up')}}</div>
                @endif
                <div class="card-body">
                    <form action="{{route('test.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label>Client Name</label>
                        <input type="hidden" name="test_id" value="{{$test_info->id}}">
                        <input type="text" class="form-control" name="test_name" value="{{$test_info->test_name}}">
                        @error('test_name')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Country</label>
                        <input type="text" class="form-control" name="country" value="{{$test_info->country}}">
                        @error('country')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Description</label>
                        <textarea name="desp" class="form-control">{{$test_info->desp}}</textarea>
                        @error('desp')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Picture</label>
                        <input type="file" class="form-control" name="test_img" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                        <img width="100" src="{{asset('upload/testimonial')}}/{{$test_info->test_img}}" id="blah" alt="">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection