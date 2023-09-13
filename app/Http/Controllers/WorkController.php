<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class WorkController extends Controller
{
    function works(){
        $works = Work::all();
        return view('admin.work.work', [
            'works'=>$works,
        ]);
    }

    function work_store(Request $request){
        $request->validate([
            'title'=>'required',
            'desp'=>'required',
            'work'=>['required','image', 'max:1000'],
        ]);

        $work_id = Work::insertGetId([
            'title'=>$request->title,
            'desp'=>$request->desp,
            'created_at'=>Carbon::now(),
        ]);

        $work_img = $request->work;
        $extension = $work_img->getClientOriginalExtension();
        $file_name = $work_id.'.'.$extension;

        Image::make($work_img)->save(public_path('upload/work/'.$file_name));

        Work::find($work_id)->update([
            'work'=>$file_name,
        ]);

        return back()->withWork('Successfully Added');

    }

    function work_delete($work_id){
        $present_work = Work::find($work_id);
        unlink(public_path('upload/work/'.$present_work->work));

        Work::find($work_id)->delete();

        return back()->withWork_del('Successfully Deleted');
    }

    function work_edit(Request $request){
        $work_info = Work::find($request->work_id);
        return view('admin.work.edit_work', [
            'work_info'=>$work_info,
        ]);
    }

    function work_update(Request $request){
        if($request->work == ''){
            Work::find($request->work_id)->update([
                'title'=>$request->title,
                'desp'=>$request->desp,
            ]);
        }
        else{
            $present_work = Work::find($request->work_id);
            unlink(public_path('upload/work/'.$present_work->work));

            $work_img = $request->work;
            $extension = $work_img->getClientOriginalExtension();
            $file_name = $request->work_id.'.'.$extension;

           Image::make($work_img)->save(public_path('upload/work/'.$file_name));

           Work::find($request->work_id)->update([
            'title'=>$request->title,
            'desp'=>$request->desp,
            'work'=>$file_name,
           ]);
        }
        return back()->withWork_up('Successfully Updated');
        
    }
}
