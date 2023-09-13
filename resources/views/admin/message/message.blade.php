@extends('layouts.dashboard')

@section('content')
@can('message_list')
    <div class="row">
        <div class="col-lg-10 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4>All Messages</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($messages as $message)
                            <tr class="{{$message->status == 0?'bg-light':''}}">
                                <td>{{$message->name}}</td>
                                <td>{{$message->email}}</td>
                                <td>{{substr($message->message, 0,25)}}</td>
                                <td>
                                    <form action="{{route('message.view')}}" method="GET" class="d-inline">
                                        @csrf
                                        <button name="mes_id" value="{{$message->id}}" class="btn btn-primary">View</button>
                                    </form>
                                    <a href="{{route('message.delete', $message->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    @else
    <h4 class="text-danger">Unfortunately, you don't have access For this page.</h4>
@endcan
@endsection