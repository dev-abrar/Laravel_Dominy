@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Add Member</h4>
                </div>
                <div class="card-body">
                    @if (session('team_up'))
                        <div class="alert alert-success">{{session('team_up')}}</div>
                    @endif
                    <form action="{{route('member.update')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="hidden" name="member_id" value="{{$member_info->id}}">
                            <input type="text" class="form-control" name="name" value="{{$member_info->name}}">
                        </div>
                        <div class="mb-3">
                            <label>Roll</label>
                            <input type="text" class="form-control" name="roll" value="{{$member_info->roll}}">
                        </div>
                        <div class="mb-3">
                            <label>FB Link</label>
                            <input type="text" class="form-control" name="facebook" value="{{$member_info->facebook}}">
                        </div>
                        <div class="mb-3">
                            <label>Twitter Link</label>
                            <input type="text" class="form-control" name="twitter" value="{{$member_info->twitter}}">
                        </div>
                        <div class="mb-3">
                            <label>Linkedin Link</label>
                            <input type="text" class="form-control" name="linkedin" value="{{$member_info->linkedin}}">
                        </div>
                        <div class="mb-3">
                            <label>Instagram Link</label>
                            <input type="text" class="form-control" name="instagram" value="{{$member_info->instagram}}">
                        </div>
                        <div class="mb-3">
                            <label>Picture</label>
                            <input type="file" class="form-control" name="member" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                            <img width="100" src="{{asset('upload/team')}}/{{$member_info->member}}" id="blah" alt="">
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