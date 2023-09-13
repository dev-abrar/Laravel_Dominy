@extends('layouts.dashboard')

@section('content')
    @can('role_manager')
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Role List</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Role</th>
                                <th>Permission</th>
                                <th>Action</th>
                            </tr>

                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{$role->name}}</td>
                                    <td class="text-wrap">
                                        @foreach ($role->getPermissionNames() as $permission)
                                            <div class="badge badge-primary mb-2">{{$permission}}</div>
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{route('role.delete', $role->id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>User List</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>User</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>

                            @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td class="text-wrap">
                                        @forelse ($user->getRoleNames() as $role)
                                            <div class="badge badge-success mb-2">{{$role}}</div>
                                            @empty
                                            <div class="badge badge-secondary">Not Assigned</div>
                                        @endforelse
                                    </td>
                                    <td>
                                        <a href="{{route('remove.role', $user->id)}}" class="btn btn-danger">Delete</a>
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
                        <h4>Add Permission</h4>
                    </div>
                    <div class="card-body">
                        @if (session('permisson'))
                            <div class="alert alert-success">{{session('permisson')}}</div>
                        @endif
                        <form action="{{route('permisson.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label>Permission Name</label>
                                <input type="text" name="permission" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary">Add Permission</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header">
                        <h4>Add Role</h4>
                    </div>
                    <div class="card-body">
                        @if (session('role'))
                            <div class="alert alert-success">{{session('role')}}</div>
                        @endif
                        <form action="{{route('role.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label>Role Name</label>
                                <input type="text" name="role_name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <h6>Select Permission</h6>
                            <div class="mb-1 d-flex flex-wrap">
                                @foreach ($permissions as $permisson)
                                <div class="form-check">
                                        <label id="per{{$permisson->id}}" class="form-check-label" style="margin-right: 20px">
                                        <input type="checkbox" name="permission[]" class="form-check-input" value="{{$permisson->id}}" id="per{{$permisson->id}}">
                                        {{$permisson->name}}
                                    <i class="input-frame"></i></label>
                                </div>
                                @endforeach
                            </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary">Add Role</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header">
                        <h4>Assign Role</h4>
                    </div>
                    <div class="card-body">
                        @if (session('user_role'))
                            <div class="alert alert-success">{{session('user_role')}}</div>
                        @endif
                        <form action="{{route('assign.role')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <select name="user_id">
                                    <option value="">Select User</option>
                                    @foreach ($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <select name="role_id">
                                    <option value="">Select Role</option>
                                    @foreach ($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary">Assign Role</button>
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