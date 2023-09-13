<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;

class UserController extends Controller
{
    function users(){
        $users = User::where('id', '!=', Auth::id())->get();
        return view('admin.user.user_list', [
            'users'=>$users,
        ]);
    }
    function user_delete($user_id){
        
        $present_img = User::find($user_id);
        if($present_img->photo != null){
            unlink(public_path('upload/user/'.$present_img->photo));
        }

        User::find($user_id)->delete();
        return back()->withUser_del('Deleted');
    }

    function profile(){
        return view('admin.user.profile');
    }

    function user_update(Request $request){
        User::find(Auth::id())->update([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);
        return back()->withinfosuc('Info Successfylly Updated');
    }

    function user_password(Request $request){
        $request->validate([
            'old_password'=>'required',
            'password'=>['required', 'confirmed'],
            'password_confirmation'=>'required',
        ]);

        if(Hash::check($request->old_password, Auth::user()->password)){
            User::find(Auth::id())->update([
                'password'=>bcrypt($request->password),
            ]);
            return back()->withPasssucc('Password successfully updated');
        }
        else{
            return back()->with('old_wrong', 'Old Password is not correct');
        }
    }

    function user_photo(Request $request){
        $request->validate([
            'photo'=>['required','image', 'max:1000'],
        ]);

        if(Auth::user()->photo != null){
            unlink(public_path('upload/user/'.Auth::user()->photo));
        }

        $upload_file = $request->photo;
        $extension = $upload_file->getClientOriginalExtension();
        $file_name = Auth::id().'.'.$extension;

        Image::make($upload_file)->save(public_path('upload/user/'.$file_name));

        User::find(Auth::id())->update([
            'photo'=>$file_name,
        ]);
        return back()->withProfilesucc('Profile Picture Uploaded');
    }

}
