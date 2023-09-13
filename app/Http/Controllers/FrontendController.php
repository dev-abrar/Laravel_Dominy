<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Counter;
use App\Models\Logo;
use App\Models\Member;
use App\Models\Menu;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Work;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index(){
        $services = Service::all();
        $counters = Counter::all();
        $portfolios = Portfolio::all();
        $testimonial = Testimonial::all();
        $members = Member::all();
        $banners = Banner::where('id', 1)->get();
        return view('frontend.index', [
          'services'=>$services,
          'counters'=>$counters,
          'portfolios'=>$portfolios,
          'testimonial'=>$testimonial,
          'members'=>$members,
          'banners'=>$banners,
        ]);
    }

    function about(){
      $members = Member::all();
      $banners = Banner::where('id', 2)->get();
      return view('frontend.about', [
        'members'=>$members,
        'banners'=>$banners,
      ]);
    }

    function website(){
      $services = Service::all();
      $testimonial = Testimonial::all();
      $banners = Banner::where('id', 3)->get();
      return view('frontend.website', [
        'services'=>$services,
        'testimonial'=>$testimonial,
        'banners'=>$banners,
      ]);
    }

    function ecommerce(){
      $services = Service::all();
      $testimonial = Testimonial::all();
      $banners = Banner::where('id', 4)->get();
      return view('frontend.ecommerce', [
        'services'=>$services,
        'testimonial'=>$testimonial,
        'banners'=>$banners,
      ]);
    }

    function work_page(){
      $banners = Banner::where('id', 5)->get();
      $works = Work::all();
      return view('frontend.work_page', [
        'banners'=>$banners,
        'works'=>$works,
      ]);
    }

    function contact(){
      $banners = Banner::where('id', 6)->get();
      return view('frontend.contact',[
        'banners'=>$banners,
      ]);
    }

}
