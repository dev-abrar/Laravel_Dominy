@extends('layouts.dashboard')

@section('content')
@can('user_list')
    


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>User List</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Picture</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($users as $sl=>$user)
                        <tr>
                            <td>{{$sl+1}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                @if ($user->photo != null)
                                    <img src="{{asset('upload/user')}}/{{$user->photo}}" alt="">
                                    @else
                                    <img src="{{ Avatar::create($user->name)->toBase64() }}" />
                                @endif
                            </td>
                            <td>{{$user->created_at->diffForHumans()}}</td>
                            <td>
                                <button data-id="{{route('user.delete', $user->id)}}"
                                    class="d_btn btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_script')
    <script>
        $('.d_btn').click(function () {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    link = $(this).attr('data-id');
                    window.location.href = link;
                }
            })
        });
    </script>
    @if (session('user_del'))
        <script>
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
        </script>
    @endif
@else
<h4 class="text-danger">Unfortunately, you don't have access For this page.</h4>
@endcan
@endsection
