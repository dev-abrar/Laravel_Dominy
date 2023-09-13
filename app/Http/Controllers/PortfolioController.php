<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Image;

class PortfolioController extends Controller
{
    function portfolio(){
        $portfolios = Portfolio::all();
        return view('admin.portfolio.portfolio', [
            'portfolios'=>$portfolios,
        ]);
    }

    function port_store(Request $request){
       $request->validate([
        'class'=>'required',
        'preview'=>['required', 'image', 'max:1000'],
        'gallery'=>['required', 'image', 'max:1000'],
       ]);

         $random = random_int(10, 999);
         $preview_img = $request->preview;
         $extension = $preview_img->getClientOriginalExtension();
         $file_name = $request->class.$random.'.'.$extension;

         Image::make($preview_img)->save(public_path('upload/portfolio/preview/'.$file_name));


         $gallery_img = $request->gallery;
         $extension2 = $gallery_img->getClientOriginalExtension();
         $file_name2 = $request->class.$random.'.'.$extension2;

         Image::make($gallery_img)->save(public_path('upload/portfolio/gallery/'.$file_name2));


         Portfolio::insert([
        'class'=>$request->class,
        'preview'=>$file_name,
        'gallery'=>$file_name2,
        ]);
        return back()->withportsucc('Successfully Added');
    }

    function port_delete($port_id){
        $present_preview = Portfolio::find($port_id);
        unlink(public_path('upload/portfolio/preview/'.$present_preview->preview));

        $present_gallery = Portfolio::find($port_id);
        unlink(public_path('upload/portfolio/gallery/'.$present_gallery->gallery));

        Portfolio::find($port_id)->delete();
        return back()->withPortsucc('Successfully Deleted');

    }

}
