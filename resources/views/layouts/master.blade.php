<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dominy Tech IT Solution Bangladesh and Software Company</title>
  <link rel="canonical" href="https://www.dominytech.com" />
  <meta name="creator" content="@Abdur Rahman">
  <meta property="og:url" content="https://dominytech.com/" />
  <meta property="og:site_name" content="Dominy Tech" />
  <meta property="og:image:width" content="1568" />
  <meta property="og:image:height" content="755" />
  <meta property="og:image:type" content="image/png" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="title" content="Dominy Tech IT Solution Bangladesh and Software Company">
  <meta name="description" content="Get your business ahead of your competitors with our complete web solution packages!">
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="website" />
  <meta name="keyword" content="dominytech">
  <meta name="author" content="dominytech.com">
  <!-- css link -->
  <link rel="icon" href="{{asset('frontend/images/favicon.png')}}" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/venobox.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
</head>

<body>

  @php
    $logos = App\Models\Logo::where('status', 1)->get();
    $menus = App\Models\Menu::all();
  @endphp
  <!-- ===================== navbar part start ====================== -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        @foreach ($logos as $logo)
        <img src="{{asset('upload/logo')}}/{{$logo->logo}}" alt="">
        @endforeach
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fa-solid fa-bars show"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          @foreach ($menus as $menu)
          <li class="nav-item {{$menu->id == $banner->id?'active':''}}">
            <a class="nav-link" href="{{route($menu->menu_link)}}">{{$menu->menu_name}}</a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </nav>

  <div class=" preloader">
    <h2>
        <span class="let1">D</span>
        <span class="let2">O</span>
        <span class="let3">M</span>
        <span class="let4">I</span>
        <span class="let4">N</span>
        <span class="let4">Y</span>
        <span class="let7">.</span>
    </h2>
   </div>
  <!-- ===================== navbar part end====================== -->
      
  <div class="page_content">
    @yield('content')
  </div>

  <!-- ===================== footer part start====================== -->
  <footer id="footer">
    <div class="footer_top" style="background: url({{asset('frontend/images/contanct.jpg')}}) no-repeat center/cover">
      <div class="container">
        <div class="footer_content">
          <div class="row">
            <div class="col-lg-7">
              <h3>subscribe us to get latest news in your inbox
                from Dominy Tech community</h3>
            </div>
            <div class="col-lg-5">
              <form>
                <input type="email" placeholder="YOUR EMAIL">
                <button type="submit">SUBSCRIBE</button>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-sm-6 wow bounceInLeft" data-wow-duration="1s" data-wow-delay=".4s">
            <div class="foot1">
              <img width="130" src="{{asset('frontend/images/logo.png')}}" alt="logo">
              <p>Dominytech Provides web design and developed website that help you to incresing leads and help you to grow your sales.
                <span>And also helps you to reach your targeted sales. Talk to us today.</span></p>
              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
              <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow bounceInLeft" data-wow-duration="1s" data-wow-delay=".4s">
            <div class="foot2">
              <h3>Contact us</h3>
              <div class="foot21 text-left">
                <a href="callto: +8801798328852"><i class="fas fa-phone-alt"></i> +8801798328852</a>
                <a href="mailto: dominytech.bd@gmail.com"><i class="fas fa-envelope"></i>dominytech.bd@gmail.com</a>
                <a href="{{route('index')}}" target="_blank"><i class="fas fa-globe-asia"></i>
                  www.dominytech.com</a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-sm-6 wow bounceInRight" data-wow-duration="1s" data-wow-delay=".4s">
            <div class="foot3">
              <h3>Important Links</h3>
              <div class="foot_menu">
                <ul>
                  @foreach ($menus as $menu)
                  <li><a href="{{route($menu->menu_link)}}">{{$menu->menu_name}}</a></li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 wow bounceInRight" data-wow-duration="1s" data-wow-delay=".4s">
            <div class="foot4">
              <h3>Flicker Photos</h3>
              <div class="foot4_row">
                <div class="row">
                  <div class="col-lg-4 col-sm-4 col-4 fcol">
                    <img class="w-100 img-fluid" src="{{asset('frontend/images/f1.jpg')}}" alt="Dominy Tech web design agency">
                  </div>
                  <div class="col-lg-4 col-sm-4 col-4 fcol">
                    <img class="w-100 img-fluid" src="{{asset('frontend/images/f2.jpg')}}" alt="Dominy Tech web design agency">
                  </div>
                  <div class="col-lg-4 col-sm-4 col-4 fcol">
                    <img class="w-100 img-fluid" src="{{asset('frontend/images/f3.jpg')}}" alt="Dominy Tech web design agency">
                  </div>
                  <div class="col-lg-4 col-sm-4 col-4 fcol">
                    <img class="w-100 img-fluid" src="{{asset('frontend/images/f4.jpg')}}" alt="Dominy Tech web design agency">
                  </div>
                  <div class="col-lg-4 col-sm-4 col-4 fcol">
                    <img class="w-100 img-fluid" src="{{asset('frontend/images/f5.jpg')}}" alt="Dominy Tech web design agency">
                  </div>
                  <div class="col-lg-4 col-sm-4 col-4 fcol">
                    <img class="w-100 img-fluid" src="{{asset('frontend/images/f6.jpg')}}" alt="Dominy Tech web design agency">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <div class="row">
        <div class="col-lg-6 m-auto">
          <div class="foot_bottom text-center">
            <p>Copyright &copy; 2023. All rights reserved by <span>Dominy Tech</span></p>
          </div>
        </div>
      </div>
    </div>


  </footer>
  <!-- =========== footer area end ================ -->
  <div class="row">
    <div class="col-lg-1 d-none d-lg-block">
      <div class="bt_top">
        <i class="fa-solid fa-angle-up"></i>
      </div>
    </div>
  </div>

  <!-- js link -->
  <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery-1.12.4.min.js')}}"></script>
  <script src="{{asset('frontend/js/slick.min.js')}}"></script>
  <script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('frontend/js/mixitup.min.js')}}"></script>
  <script src="{{asset('frontend/js/particles.min.js')}}"></script>
  <script src="{{asset('frontend/js/app.js')}}"></script>
  <script src="{{asset('frontend/js/venobox.min.js')}}"></script>
  <script src="{{asset('frontend/js/wow.min.js')}}"></script>
  <script src="{{asset('frontend/js/script.js')}}"></script>
</body>

</html>