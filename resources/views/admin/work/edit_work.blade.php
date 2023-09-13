@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Edi Work</h4>
                </div>
                <div class="card-body">
                    @if (session('work_up'))
                        <div class="alert alert-success">{{session('work_up')}}</div>
                    @endif
                    <form action="{{route('work.update')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Title</label>
                            <input type="hidden" name="work_id" value="{{$work_info->id}}">
                            <input type="text" class="form-control" name="title" value="{{$work_info->title}}">
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <textarea class="form-control" name="desp">{{$work_info->desp}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label>Image</label>
                            <input type="file" class="form-control" name="work" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                            <img width="100" src="{{asset('upload/work')}}/{{$work_info->work}}" id="blah" alt="">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Add Work</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection