@extends('layouts.master')

@section('content')
     <!-- ===================== banner part start====================== -->
     <section id="banner" class="contact_banner">
        @foreach ($banners as $banner)
            <div class="{{$banner->banner_class}}"></div>
        @endforeach
        <div class="d-none d-lg-block" id="particles-js"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h1><span class="wow fadeInDown " data-wow-duration=".6s" data-wow-delay=".2s">Contact</span><span
                            class="ban_span wow fadeInDown" data-wow-duration=".6s" data-wow-delay=".4s">Dominy
                            Tech</span></h1>
                    <p class="wow fadeInDown" data-wow-duration=".6s" data-wow-delay=".6s">Thank you for getting in
                        touch! Kindly. Fill the form, have a great day!</p>

                    <a href="contact.html" class="wow fadeInDown scroll-link" data-wow-duration=".6s"
                        data-wow-delay=".8s">Hire Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ===================== banner part end====================== -->

    <!-- ===================== contact part start====================== -->
    <section id="contact" style="background: url({{asset('frontend/images/contact_bg.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="common_header head_team text-center">
                        <h3>Contct <span>Us</span> <span class="cmn_span">Contact Us</span></h3>
                        <p>We promote sustained, inclusive, and sustainable economic growth, full and productive employment, and decent work for all.</p>
                    </div>
                </div>
            </div>
            <div class="contact_main">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact_left">
                            <img src="{{asset('frontend/images/contact.jpg')}}" class="w-100 img-fluid" alt="Dominy Tech web design agency">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact_form">
                            <h3>Dominy <span>Tech</span></h3>
                            <form action="{{route('contact.message')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    @if (session('mes_succ'))
                                        <div class="alert alert-success">{{session('mes_succ')}}</div>
                                    @endif
                                    <label>Your Name</label>
                                    <input type="text" name="name">
                                    @error('name')
                                        <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Your Email</label>
                                    <input type="text" name="email">
                                    @error('email')
                                        <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Message</label>
                                    <textarea name="message"></textarea>
                                </div>
                                <div class="mb-3">
                                    <button type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===================== contact part end====================== -->
@endsection