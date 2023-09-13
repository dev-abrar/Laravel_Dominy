@extends('layouts.dashboard')

@section('content')
@can('add_portfolio')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4>Portfolio List</h4>
                </div>
                <div class="card-body">
                    @if (session('portsucc'))
                        <div class="alert alert-success">{{session('portsucc')}}</div>
                    @endif
                    <table class="table table-striped">
                        <tr>
                            <th>Sl</th>
                            <th>Class Name</th>
                            <th>Preview</th>
                            <th>Gallery</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($portfolios as $sl=>$portfolio)
                            <tr>
                                <td>{{$sl+1}}</td>
                                <td>{{$portfolio->class}}</td>
                                <td>
                                    <img src="{{asset('upload/portfolio/preview')}}/{{$portfolio->preview}}" alt="">
                                </td>
                                <td>
                                    <img src="{{asset('upload/portfolio/gallery')}}/{{$portfolio->gallery}}" alt="">
                                </td>
                                <td>
                                    <a href="{{route('port.delete', $portfolio->id)}}" class="btn btn-danger">Delete</a>
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
                    <h4>Add new portfolio</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('port.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            @if (session('portsucc'))
                                <div class="alert alert-success">{{session('portsucc')}}</div>
                            @endif
                            <label>Add Class</label>
                            <input type="text" class="form-control" name="class">
                            @error('class')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Preview Image</label>
                            <input type="file" class="form-control" name="preview">
                            @error('preview')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Gallery Image</label>
                            <input type="file" class="form-control" name="gallery">
                            @error('gallery')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Add Portfolio</button>
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