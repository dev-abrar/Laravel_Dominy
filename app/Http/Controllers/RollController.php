<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RollController extends Controller
{
    function role(){
        $users = User::all();
        $permissions = Permission::all();
        $roles = Role::all();
        return view('admin.role.role', [
            'permissions'=>$permissions,
            'roles'=>$roles,
            'users'=>$users,
        ]);
    }

    function permisson_store(Request $request){
        Permission::create(['name' => $request->permission]);
        return back()->with('permisson', 'Successfully Added');
    }

    function role_store(Request $request){
       $role= Role::create(['name' => $request->role_name]);
        $role->givePermissionTo($request->permission);

        return back()->with('role', 'Successfully Added');
    }

    function assign_role(Request $request){
        $user = User::find($request->user_id);
        $user->assignRole($request->role_id);

        return back()->with('user_role', 'Successfully Added');
    }

    function remove_role($user_id){
        $user = User::find($user_id);
        $user->syncPermissions([]);
        $user->syncRoles([]);

        return back();
    }

    function role_delete($role_id){
       $role = Role::find($role_id);
       $role->syncPermissions([]);
       $role->delete();
       return back();
    }

}
