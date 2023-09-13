<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    function banner(){
        $banners = Banner::all();
        return view('admin.banner_class.ban_class', [
            'banners'=>$banners,
        ]);
    }

    function banner_store(Request $request){
        $request->validate([
            'banner_class'=>'required',
        ]);

        Banner::insert([
            'banner_class'=>$request->banner_class,
        ]);
        return back()->withBanner('Successfully Updated');
    }

    function banner_delete($ban_id){
        Banner::find($ban_id)->delete();
        return back()->withBanner_del('Successfully Deleted');
    }

    function banner_edit(Request $request){
        $ban_info = Banner::find($request->ban_id);
        return view('admin.banner_class.edit_banner_class', [
            'ban_info'=>$ban_info,
        ]);
    }

    function banner_update(Request $request){
        Banner::find($request->ban_id)->update([
            'banner_class'=>$request->banner_class,
        ]);

        return back()->withBanner_up('Successfully Updated');
    }
}
