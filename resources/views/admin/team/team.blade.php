@extends('layouts.dashboard')

@section('content')
@can('add_member')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4>Team Members</h4>
                </div>
                <div class="card-body">
                    @if (session('mem_del'))
                    <div class="alert alert-success">{{session('mem_del')}}</div>
                    @endif
                    <table class="table table-striped">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Picture</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($members as $sl=>$member)
                            <tr>
                                <td>{{$sl+1}}</td>
                                <td>{{$member->name}}</td>
                                <td>{{$member->roll}}</td>
                                <td>
                                    <img src="{{asset('upload/team')}}/{{$member->member}}" alt="">
                                </td>
                                <td>
                                    <form action="{{route('member.edit')}}" method="GET" class="d-inline">
                                        @csrf
                                        <button class="btn btn-primary" name="member_id" value="{{$member->id}}">Edit</button>
                                    </form>
                                    <a href="{{route('member.delete', $member->id)}}" class="btn btn-danger">Delete</a>
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
                    <h4>Add Member</h4>
                </div>
                <div class="card-body">
                    @if (session('team'))
                        <div class="alert alert-success">{{session('team')}}</div>
                    @endif
                    <form action="{{route('member.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name">
                            @error('name')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Roll</label>
                            <input type="text" class="form-control" name="roll">
                            @error('roll')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>FB Link</label>
                            <input type="text" class="form-control" name="facebook">
                        </div>
                        <div class="mb-3">
                            <label>Twitter Link</label>
                            <input type="text" class="form-control" name="twitter">
                        </div>
                        <div class="mb-3">
                            <label>Linkedin Link</label>
                            <input type="text" class="form-control" name="linkedin">
                        </div>
                        <div class="mb-3">
                            <label>Instagram Link</label>
                            <input type="text" class="form-control" name="instagram">
                        </div>
                        <div class="mb-3">
                            <label>Picture</label>
                            <input type="file" class="form-control" name="member">
                            @error('member')
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
    @else
    <h4 class="text-danger">Unfortunately, you don't have access For this page.</h4>
@endcan
@endsection