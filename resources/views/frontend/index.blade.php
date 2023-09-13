@extends('layouts.master')

@section('content')
<!-- ===================== banner part start====================== -->
<section id="banner" class="banner">
    @foreach ($banners as $banner)
    <div class="{{$banner->banner_class}}"></div>
    @endforeach
    <div class="d-none d-lg-block" id="particles-js"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <h1><span class="wow fadeInDown " data-wow-duration=".6s" data-wow-delay=".2s">Dominy Tech</span> <span
                        class="wow fadeInDown " data-wow-duration=".6s" data-wow-delay=".4s">Web <span
                            class="ban_span wow fadeInDown" data-wow-duration=".6s"
                            data-wow-delay=".6s">Technology</span></span>
                    <span class="wow fadeInDown " data-wow-duration="1s" data-wow-delay=".8s">Company</span></h1>
                <p class="wow fadeInDown" data-wow-duration=".6s" data-wow-delay="1s">We Provide web design and
                    developed
                    website that help you to incresing leads and help you to grow your sales.And also helps you to reach
                    your
                    targeted sales.</p>
                <a href="contact.html" class="wow fadeInDown scroll-link" data-wow-duration=".6s"
                    data-wow-delay="1.2s">Hire
                    Us</a>
            </div>
        </div>
    </div>
</section>
<!-- ===================== banner part end====================== -->

<!-- ===================== service part start====================== -->
<section id="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="common_header text-center">
                    <h3>Our <span>Services</span> <span class="cmn_span">Our Services</span></h3>
                    <p>Get your business ahead of your competitors with our complete web solution packages!</p>
                </div>
            </div>
        </div>
        <div class="service_main">
            <div class="row">
                @foreach ($services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="service_item">
                        <div class="service_content">
                            <div class="ser_icon">
                                <i class="{{$service->icon}}"></i>
                            </div>
                            <h4>{{$service->title}}</h4>
                            <p>{{substr($service->desp, 0, 100)}}</p>
                            <a href="#">Read more <i class="fa-solid fa-angles-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- ===================== service part end====================== -->

<!-- ===================== counter part start====================== -->
<section id="counter">
    <div class="container">
        <div class="counter_main">
            <div class="row">
                @foreach ($counters as $counter)
                <div class="col-lg-3 col-md-6 counter_item">
                    <div class="count_content">
                        <h4>{{$counter->sl_num}}</h4>
                        <h2><span class="counter">{{$counter->number}}</span>+</h2>
                        <h3>{{$counter->title}}</h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- ===================== counter part end====================== -->

<!-- ===================== team part start====================== -->
<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="common_header head_team text-center">
                    <h3>Our <span>Team</span> <span class="cmn_span">Our Team</span></h3>
                    <p>We promote sustained, inclusive, and sustainable economic growth, full and productive employment,
                        and
                        decent work for all.</p>
                </div>
            </div>
        </div>
        <div class="team_main">
            <div class="row team_row">
                @foreach ($members as $member)
                <div class="col-lg-3 team_col">
                    <div class="team_item">
                        <div class="team_img">
                            <img src="{{asset('upload/team')}}/{{$member->member}}" alt="Dominy Tech web design agency">
                            <div class="team_overly">
                                <a href="{{$member->facebook}}"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="{{$member->twitter}}"><i class="fa-brands fa-twitter"></i></a>
                                <a href="{{$member->linkedin}}"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="{{$member->instagram}}"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team_content">
                            <h3>{{$member->name}}</h3>
                            <p>{{$member->roll}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- ===================== team part end====================== -->

<!-- ===================== gallery part start====================== -->
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="common_header header_port text-center">
                    <h3>Our <span>Gallery</span> <span class="cmn_span">Our Gallery</span></h3>
                    <p>We are known for building stunning and captivating websites for both businesses and Individuals
                        and also
                        humbled by 100% client satisfaction!!</p>
                </div>
            </div>
        </div>

        <div class="port_row">
            <div class="port_list text-center">
                <button type="button" class="control" data-filter="all">All</button>
                <button type="button" class="control" data-filter=".uidesign">UI/UX Design</button>
                <button type="button" class="control" data-filter=".wordpress">Wordpress</button>
                <button type="button" class="control" data-filter=".webdesign">Web Design</button>
                <button type="button" class="control" data-filter=".webdevelopment">Web Development</button>
            </div>
            <div class="row port_mix justify-content-between">
                @foreach ($portfolios as $port)
                <div class="col-lg-4 col-md-6 mix {{$port->class}}">
                    <div class="port_col">
                        <img src="{{asset('upload/portfolio/preview')}}/{{$port->preview}}" class="w-100 img-fluid" alt="Dominy Tech web design agency">
                        <div class="port_overly">
                            <a class="my-image-links" data-gall="gallery01" href="{{asset('upload/portfolio/gallery')}}/{{$port->gallery}}"><i
                                    class="fa-solid fa-link"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- ===================== gallery part end====================== -->

<!-- ===================== Testimoinal part start====================== -->
<section id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="common_header header_test text-center">
                    <h3>Test<span>imonial </span> <span class="cmn_span">Testimonial</span></h3>
                    <p>Awesome 5.0 Based on 62 reviews and ratings based on Google, Facebook, Trustpilot, and Clutch.
                    </p>
                </div>
            </div>
        </div>
        <div class="test_main">
            <div class="row test_row">
                @foreach ($testimonial as $test)
                <div class="col-lg-4">
                    <div class="test_col">
                        <div class="test_item">
                            <div class="test_shape_top"></div>
                            <div class="test_shape_bottom"></div>
                            <div class="test_content">
                                <h3>{{$test->test_name}}</h3>
                                <h4>From {{$test->country}}</h4>
                                <div class="test_icon">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <p>{{substr($test->desp, 0, 200)}}</p>
                            <div class="test_img">
                                <img src="{{asset('upload/testimonial')}}/{{$test->test_img}}" class="w-100 img-fluid" alt="Dominy Tech web design agency">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- ===================== Testimoinal part end====================== -->

@endsection
