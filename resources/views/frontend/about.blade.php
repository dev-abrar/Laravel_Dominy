@extends('layouts.master')

@section('content')
      <!-- ===================== banner part start====================== -->
      <section id="banner" class="about_banner">
        @foreach ($banners as $banner)
        <div class="{{$banner->banner_class}}"></div>
        @endforeach
        <div class="d-none d-lg-block" id="particles-js"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h1><span class="wow fadeInDown " data-wow-duration=".6s" data-wow-delay=".2s">About</span><span
                            class="ban_span wow fadeInDown" data-wow-duration=".6s" data-wow-delay=".4s">Dominy
                            Tech</span></h1>
                    <p class="wow fadeInDown" data-wow-duration=".6s" data-wow-delay=".6s">Dominy Tech is a result
                        driven solution based digital agency that helps all sizes businesses create Online Marketing
                        plan, build websites and custom web applications that boost their sales & leads. Our team
                        consist of 10 years+ industry experienced talented Project consultant, creative designers and
                        software developers.</p>

                    <a href="contact.html" class="wow fadeInDown scroll-link" data-wow-duration=".6s"
                        data-wow-delay=".8s">Hire Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ===================== banner part end====================== -->

    <!-- ===================== about part start====================== -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="common_header agency_head text-center">
                        <h3>Our <span>Agency</span> <span class="cmn_span">Our Agency</span></h3>
                        <p>Hire us now to build cloud-based software, websites, and SEO strategies that generate leads
                            and sales for you </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="about_left">
                        <img src="{{asset('frontend/images/about.jpg')}}" class="w-100 img-fluid" alt="Dominy Tech web design agency">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_right">
                        <h3>Our <span>Mission</span></h3>
                        <ul>
                            <li>Provide quality service or product for clients which looks good and creative, Load fast,
                                Search engine optimized, Functional and structured, Easy to manage and organized and
                                Increase the business value.</li>
                            <li>Provide a welcoming environment where our colleague become our family and our guests
                                become our friend.</li>
                            <li>Provide solutions & Feedbacks as soon as possible, Can do support and show ownership so
                                that our client become our partner and fan.</li>
                            <li>Ensure healthy lives and promote well-being.</li>
                            <li>Promote sustainable economic growth, full and productive employment and decent work for
                                all.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===================== about part end====================== -->

    <!-- ===================== member part start====================== -->
    <section id="member">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="common_header mem_head text-center">
                        <h3>Our <span>Members</span> <span class="cmn_span">Our Members</span></h3>
                        <p>We promote sustained, inclusive, and sustainable economic growth, full and productive
                            employment, and decent work for all.</p>
                    </div>
                </div>
            </div>
            <div class="member_main">
                @foreach ($members as $member)
                <div class="row member_item">
                    <div class="col-lg-6 ">
                        <div class="member_left">
                            <div class="mem_shape_top"></div>
                            <div class="mem_shape_btm"></div>
                            <img src="{{asset('upload/team')}}/{{$member->member}}" alt="Dominy Tech web design agency">
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="member_right">
                            <h2>{{$member->name}}</h2>
                            <h3>{{$member->roll}}</h3>
                            <h4>Hard Skills</h4>
                            <ul>
                                <li>Front-end Developer</li>
                                <li>Back-end Developer</li>
                                <li>PHP</li>
                                <li>Laravel</li>
                                <li>Javascript</li>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>Bootstrap</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ===================== member part end====================== -->
@endsection