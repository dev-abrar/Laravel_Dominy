<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class TestimonialController extends Controller
{
    function testimonial(){
        $testimonial = Testimonial::all();
        return view('admin.testimonial.testimonial', [
            'testimonial'=>$testimonial,
        ]);
    }

    function test_store(Request $request){
        $request->validate([
            'test_name'=>'required',
            'country'=>'required',
            'desp'=>'required',
            'test_img'=>['image', 'max:1000'],
        ]);

        if($request->test_img == ''){
            Testimonial::insert([
                'test_name'=>$request->test_name,
                'country'=>$request->country,
                'desp'=>$request->desp,
                'created_at'=>Carbon::now(),
            ]);
        }
        else{
            $test_img = $request->test_img;
            $extension = $test_img->getClientOriginalExtension();
            $file_name = substr($request->test_name, 0,3).'.'.$extension;

            Image::make($test_img)->save(public_path('upload/testimonial/'.$file_name));

            Testimonial::insert([
                'test_name'=>$request->test_name,
                'country'=>$request->country,
                'desp'=>$request->desp,
                'test_img'=>$file_name,
                'created_at'=>Carbon::now(),
            ]);
        }
        return back()->withTest('Succesfully Added');
        
    }

    function test_delete($test_id){
        $present_test = Testimonial::find($test_id);

        if($present_test->test_img != null){
            unlink(public_path('upload/testimonial/'.$present_test->test_img));
        }

        Testimonial::find($test_id)->delete();
        return back()->with('test_del', 'Successfully Deleted');
    }

    function test_edit(Request $request){
        $test_info = Testimonial::find($request->test_id);
        return view('admin.testimonial.edit_testimonial', [
            'test_info'=>$test_info,
        ]);
    }

    function test_update(Request $request){
        if($request->test_img == ''){
            Testimonial::find($request->test_id)->update([
                'test_name'=>$request->test_name,
                'country'=>$request->country,
                'desp'=>$request->desp,
            ]);
        }
        else{
            $present_test = Testimonial::find($request->test_id);

            if($present_test->test_img != null){
                unlink(public_path('upload/testimonial/'.$present_test->test_img));
            }

            $test_img = $request->test_img;
            $extension = $test_img->getClientOriginalExtension();
            $file_name = substr($request->test_name, 0,3).'.'.$extension;

            Image::make($test_img)->save(public_path('upload/testimonial/'.$file_name));

            Testimonial::find($request->test_id)->update([
                'test_name'=>$request->test_name,
                'country'=>$request->country,
                'desp'=>$request->desp,
                'test_img'=>$file_name,
            ]);
        }
        return back()->withTest_up('Successfully Updated');
    }

}
