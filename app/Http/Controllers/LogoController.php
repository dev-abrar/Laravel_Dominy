<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class LogoController extends Controller
{
    function logo(){
        $logos = Logo::all();
        return view('admin.logo.logo', [
            'logos'=>$logos,
        ]);
    }

    function logo_store(Request $request){
        $request->validate([
            'logo_name'=>'required',
            'logo'=>['required', 'image', 'max:1000'],
        ]);

        
        $upload_logo = $request->logo;
        $extension = $upload_logo->getClientOriginalExtension();
        $file_name = $request->logo_name.'.'.$extension;
        
        Image::make($upload_logo)->save(public_path('upload/logo/'.$file_name));
        
        Logo::insert([
            'logo_name'=>$request->logo_name,
            'logo'=>$file_name,
            'created_at'=>Carbon::now(),
        ]);
        return back()->withLogoadd('Logo Added Successfully');
    }
 
    function logo_delete($logo_id){
        $present_logo = Logo::find($logo_id);
        unlink(public_path('upload/logo/'.$present_logo->logo));

        Logo::find($logo_id)->delete();

        return back()->withLogodel('Logo Successfully Deleted');
    }

    function logo_status($logo_id){
        
        $get_status = Logo::find($logo_id);
        
        if($get_status->status == 1){
            Logo::where('id', $logo_id)->update([
                'status'=>0,
            ]);
        }
        else{
            Logo::where('id', $logo_id)->update([
                'status'=>1,
            ]);
            Logo::where('id', '!=', $logo_id)->update([
                'status'=>0,
            ]);
        }
        
         return back();
    }

}
