@extends('layouts.master')

@section('content')

<!-- ===================== banner part start====================== -->
<section id="banner" class="web_banner">
    @foreach ($banners as $banner)
    <div class="{{$banner->banner_class}}"></div>
    @endforeach
    <div class="d-none d-lg-block" id="particles-js"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <h1><span class="wow fadeInDown " data-wow-duration=".6s" data-wow-delay=".2s">E-commerce</span>
                    <span class="wow fadeInDown " data-wow-duration=".6s" data-wow-delay=".4s">Site <span
                            class="ban_span wow fadeInDown" data-wow-duration=".6s"
                            data-wow-delay=".6s">Packages</span></span></h1>
                <p class="wow fadeInDown" data-wow-duration=".6s" data-wow-delay=".8s">A Complete eCommerce Website
                    design Packages for small businesses to increase online growth & boost sales..</p>

                <a href="work.html" class="wow fadeInDown scroll-link" data-wow-duration=".6s" data-wow-delay="1s">Our
                    Works</a>
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

<!-- ===================== website part start====================== -->
<section id="website">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="common_header ecom_header text-center">
                    <h3>Ecom<span>merce</span> <span class="cmn_span">Ecommerce</span></h3>
                    <p>Ecommerce website packages start at $860 Our e-commerce service can provide a lot of benefits
                        for businessmen, including reducing the cost of operation, improving the efficiency and
                        reaching a larger customer base.</p>
                </div>
            </div>
        </div>
        <div class="web_main">
            <div class="row">
                <div class="col-lg-4">
                    <div class="web_item">
                        <div class="web_item_top">
                            <h3>Starter</h3>
                            <h5>58,000+ BDT</h5>
                        </div>
                        <div class="web_top_diff">
                            <h2>$590</h2>
                            <h5>One Time</h5>
                        </div>
                        <div class="web_item_mid">
                            <ul>
                                <li><i class="fa-solid fa-check"></i>Custom Design & Mobile Friendly</li>
                                <li><i class="fa-solid fa-check"></i>Backend Development by PHP/Laravel</li>
                                <li><i class="fa-solid fa-check"></i>Single Product E-commerce</li>
                                <li><i class="fa-solid fa-check"></i>Up to 3 pages</li>
                                <li><i class="fa-solid fa-check"></i>Only Simple Product Supported</li>
                                <li><i class="fa-solid fa-check"></i>1 Plugin based Payment Gateway</li>
                                <li><i class="fa-solid fa-check"></i>Premium Theme & plugins</li>
                                <li><i class="fa-solid fa-check"></i>Contact form</li>
                                <li><i class="fa-solid fa-check"></i>Loading Speed Optimised</li>
                                <li><i class="fa-solid fa-check"></i> Premium Stock Images</li>
                                <li><i class="fa-solid fa-check"></i>Turbo Fast Web Hosting</li>
                                <li><i class="fa-solid fa-check"></i>Social media page integrations</li>
                                <li><i class="fa-solid fa-check"></i> 1 Month Free Support</li>
                            </ul>
                        </div>
                        <div class="web_item_btm">
                            <a href="contact.html">Hire Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="web_item">
                        <div class="web_item_top">
                            <h3>Standard</h3>
                            <h5>120,000+ BDT</h5>
                        </div>
                        <div class="web_top_diff">
                            <h2>$1200</h2>
                            <h5>One Time</h5>
                        </div>
                        <div class="web_item_mid">
                            <ul>
                                <li><i class="fa-solid fa-check"></i>Custom Design & Mobile Friendly</li>
                                <li><i class="fa-solid fa-check"></i>Backend Development by PHP/Laravel</li>
                                <li><i class="fa-solid fa-check"></i>5-10 pages</li>
                                <li><i class="fa-solid fa-check"></i>Multi Products E-commerce</li>
                                <li><i class="fa-solid fa-check"></i>Simple & Variable Product Supported</li>
                                <li><i class="fa-solid fa-check"></i>Popup Contact Form </li>
                                <li><i class="fa-solid fa-check"></i>Premium Theme & plugins</li>
                                <li><i class="fa-solid fa-check"></i>Contact form</li>
                                <li><i class="fa-solid fa-check"></i>Loading Speed Optimised</li>
                                <li><i class="fa-solid fa-check"></i> Premium Stock Images</li>
                                <li><i class="fa-solid fa-check"></i>Turbo Fast Web Hosting</li>
                                <li><i class="fa-solid fa-check"></i>Social media page integrations</li>
                                <li><i class="fa-solid fa-check"></i> 3 Month Free Support</li>
                            </ul>
                        </div>
                        <div class="web_item_btm">
                            <a href="contact.html">Hire Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="web_item">
                        <div class="web_item_top">
                            <h3>Custom</h3>
                            <h5>220,000+ BDT</h5>
                        </div>
                        <div class="web_top_diff">
                            <h2>$2280</h2>
                            <h5>Per Month</h5>
                        </div>
                        <div class="web_item_mid">
                            <ul>
                                <li><i class="fa-solid fa-check"></i>Custom Design & Mobile Friendly</li>
                                <li><i class="fa-solid fa-check"></i>Backend Development by PHP/Laravel</li>
                                <li><i class="fa-solid fa-check"></i>Unlimited Pages</li>
                                <li><i class="fa-solid fa-check"></i>Multi Products E-commerce & LMS Supported</li>
                                <li><i class="fa-solid fa-check"></i>Unlimited Products</li>
                                <li><i class="fa-solid fa-check"></i>Popup Contact Form</li>
                                <li><i class="fa-solid fa-check"></i>Blogs Supported</li>
                                <li><i class="fa-solid fa-check"></i>Premium Theme & plugins</li>
                                <li><i class="fa-solid fa-check"></i>Contact form</li>
                                <li><i class="fa-solid fa-check"></i>Loading Speed Optimised</li>
                                <li><i class="fa-solid fa-check"></i> Premium Stock Images</li>
                                <li><i class="fa-solid fa-check"></i>Turbo Fast Web Hosting</li>
                                <li><i class="fa-solid fa-check"></i>Social media page integrations</li>
                                <li><i class="fa-solid fa-check"></i> 3 Month Free Support</li>
                            </ul>
                        </div>
                        <div class="web_item_btm">
                            <a href="contact.html">Hire Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===================== website part end====================== -->

<!-- ===================== Testtimonial part start====================== -->
<section id="testimonial" class="test_cmn">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="common_header header_test text-center">
                    <h3>Test<span>imonial </span> <span class="cmn_span">Testimonial</span></h3>
                    <p>Awesome 5.0 Based on 62 reviews and ratings based on Google, Facebook, Trustpilot, and
                        Clutch.</p>
                </div>
            </div>
        </div>
        <div class="test_main">
            <div class="row">
                @foreach ($testimonial as $test)
                <div class="col-lg-4 col-md-6 test_web_col">
                    <div>
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
                                <img src="{{asset('upload/testimonial')}}/{{$test->test_img}}" class="w-100 img-fluid"
                                    alt="Dominy Tech web design agency">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- ===================== Testtimonial part end====================== -->
@endsection
