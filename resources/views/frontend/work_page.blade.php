@extends('layouts.master')

@section('content')
      <!-- ===================== banner part start====================== -->
      <section id="banner" class="work_banner">
        @foreach ($banners as $banner)
        <div class="{{$banner->banner_class}}"></div>
        @endforeach
        <div class="d-none d-lg-block" id="particles-js"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h1><span class="wow fadeInDown " data-wow-duration=".6s" data-wow-delay=".2s">Dominy
                            Tech</span><span class="ban_span wow fadeInDown" data-wow-duration=".6s"
                            data-wow-delay=".4s">Works</span></h1>
                    <p class="wow fadeInDown" data-wow-duration=".6s" data-wow-delay=".6s">We are known for building
                        stunning and captivating websites for both businesses and Individuals and also humbled by 100%
                        client satisfaction!!</p>

                    <a href="contact.html" class="wow fadeInDown scroll-link" data-wow-duration=".6s"
                        data-wow-delay=".8s">Hire Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ===================== banner part end====================== -->

    <!-- ===================== works part start====================== -->
    <section id="work">
        <div class="container">
            <div class="work_main">
                @foreach ($works as $work)
                <div class="row work_item">
                    <div class="col-lg-6">
                        <div class="work_left">
                            <img src="{{asset('upload/work')}}/{{$work->work}}" class="w-100 img-fluid" alt="Dominy Tech web design agency">
                            <div class="work_info">
                                <div class="work_text">
                                    <h3>{{$work->title}}</h3>
                                    <p>{{$work->desp}} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6"></div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ===================== works part end====================== -->

@endsection