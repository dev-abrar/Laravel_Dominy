<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class TeamController extends Controller
{
    function team(){
        $members = Member::all();
        return view('admin.team.team', [
            'members'=>$members,
        ]);
    }
    function member_store(Request $request){
        $request->validate([
            'name'=>'required',
            'roll'=>'required',
            'member'=>['required', 'image', 'max:1000'],
        ]);

        $member_img = $request->member;
        $extension = $member_img->getClientOriginalExtension();
        $file_name = substr($request->name, 0,5).'.'.$extension;

        Image::make($member_img)->save(public_path('upload/team/'.$file_name));

        Member::insert([
            'name'=>$request->name,
            'roll'=>$request->roll,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'linkedin'=>$request->linkedin,
            'instagram'=>$request->instagram,
            'member'=>$file_name,
            'created_at'=>Carbon::now(),
        ]);

        return back()->withTeam('Successfully Added');
    }
   
    function member_delete($member_id){
        $present_mem = Member::find($member_id);
        unlink(public_path('upload/team/'.$present_mem->member));

        Member::find($member_id)->delete();
        return back()->with('mem_del', 'Successfully Deleted');
    }

    function member_edit(Request $request){
        $member_info = Member::find($request->member_id);
        return view('admin.team.edit_team', [
            'member_info'=>$member_info,
        ]);
    }

    function member_update(Request $request){
        if($request->member == ''){
            Member::find($request->member_id)->update([
                'name'=>$request->name,
                'roll'=>$request->roll,
                'facebook'=>$request->facebook,
                'twitter'=>$request->twitter,
                'linkedin'=>$request->linkedin,
                'instagram'=>$request->instagram,
            ]);
        }
        else{
            $member_img = $request->member;
            $extension = $member_img->getClientOriginalExtension();
            $file_name = substr($request->name, 0,5).'.'.$extension;
    
            Image::make($member_img)->save(public_path('upload/team/'.$file_name));

            Member::find($request->member_id)->update([
                'name'=>$request->name,
                'roll'=>$request->roll,
                'facebook'=>$request->facebook,
                'twitter'=>$request->twitter,
                'linkedin'=>$request->linkedin,
                'instagram'=>$request->instagram,
                'member'=>$file_name,
            ]);

        }
        return back()->withTeam_up('Successfully Updated');
    }

}
