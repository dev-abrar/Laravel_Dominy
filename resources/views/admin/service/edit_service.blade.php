@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-4 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Add services</h4>
                </div>
                @if (session('serupdate'))
                <div class="alert alert-success">{{session('serupdate')}}</div>
                @endif
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
                    <form action="{{route('service.update')}}" method="POST">
                        @csrf
                        @if (session('sersucc'))
                        <div class="alert alert-success">{{session('sersucc')}}</div>
                        @endif
                        <div class="mb-3">
                            @foreach ($fonts as $font)
                            <i style="font-size: 24px; margin-right: 10px; color: red; cursor: pointer;"
                                class="{{$font}} fa"></i>
                            @endforeach
                        </div>
                        <div class="mb-3">
                            <label>Select Icon</label>
                            <input type="hidden" name="ser_id" value="{{$service_info->id}}">
                            <input type="text" class="form-control" name="icon" id="icon" value="{{$service_info->icon}}">
                        </div>
                        <div class="mb-3">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="{{$service_info->title}}">
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <textarea name="desp" class="form-control">{{$service_info->desp}}</textarea>
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
        $('.fa').click(function () {
            var icon = $(this).attr('class');
            $('#icon').attr('value', icon);
        });
    </script>
@endsection
