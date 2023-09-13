@extends('layouts.dashboard')

@section('content')
@can('add_service')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h4>Service List</h4>
            </div>
            @if (session('serdel'))
                <div class="alert alert-success">{{session('serdel')}}</div>
            @endif
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>Title</th>
                        <th>Icon</th>
                        <th>Description</th>
                        <th>Action</th>

                        @foreach ($services as $service)
                            <tr>
                                <td>{{$service->title}}</td>
                                <td>
                                    <i style="font-size: 24px; margin-right: 10px; color: red;" class="{{$service->icon}}"></i>
                                </td>
                                <td>{{substr($service->desp, 0,20)}}</td>
                                <td>
                                    <form class="d-inline" action="{{route('ser.edit')}}" method="GET">
                                        @csrf
                                        <button class="btn btn-primary" name="ser_id" value="{{$service->id}}">Edit</button>
                                    </form>
                                    <a href="{{route('ser.delete', $service->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h4>Add services</h4>
            </div>
            <div class="card-body">
                @php
                    $fonts = array(
                    'fa-brands fa-react',
                    'fa-solid fa-desktop',
                    'fa-regular fa-lightbulb',
                    'fa-brands fa-free-code-camp',
                    'fa-solid fa-headset',
                    'fa-solid fa-pen-to-square',
                    );       
                @endphp
                <form action="{{route('service.store')}}" method="POST">
                    @csrf
                    @if (session('sersucc'))
                            <div class="alert alert-success">{{session('sersucc')}}</div>
                    @endif
                    <div class="mb-3">
                        @foreach ($fonts as $font)
                            <i style="font-size: 24px; margin-right: 10px; color: red; cursor: pointer;" class="{{$font}} fa"></i>
                        @endforeach
                    </div>
                    <div class="mb-3">
                        <label>Select Icon</label>
                        <input type="text" class="form-control" name="icon" id="icon">
                        @error('icon')
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
                        <label>Description</label>
                        <textarea name="desp" class="form-control"></textarea>
                        @error('desp')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
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

@section('footer_script')
<script>
    $('.fa').click(function(){
        var icon = $(this).attr('class');
        $('#icon').attr('value', icon);
    });
    </script>
    @else
    <h4 class="text-danger">Unfortunately, you don't have access For this page.</h4>
    @endcan
@endsection