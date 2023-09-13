<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dominy Tech Dashboard</title>
    <!-- core:css -->
    <link rel="stylesheet" href="{{asset('backend/vendors/core/core.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- end plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('backend/fonts/feather-font/css/iconfont.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('backend/css/demo_1/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('backend/images/favicon.png')}}" />
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar">
            <div class="sidebar-header">
                <a href="#" class="sidebar-brand">
                    Noble<span>UI</span>
                </a>
                <div class="sidebar-toggler not-active">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="nav">
                    <li class="nav-item nav-category">Main</li>
                    <li class="nav-item">
                        <a href="{{route('home')}}" class="nav-link">
                            <i class="link-icon" data-feather="box"></i>
                            <span class="link-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category">Admin</li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#emails" role="button" aria-expanded="false"
                            aria-controls="emails">
                            <i class="link-icon" data-feather="mail"></i>
                            <span class="link-title">User</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="emails">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="{{route('users')}}" class="nav-link">User List</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#menu" role="button" aria-expanded="false"
                            aria-controls="menu">
                            <i class="link-icon" data-feather="mail"></i>
                            <span class="link-title">Menu</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="menu">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="{{route('menu')}}" class="nav-link">Menu List</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#logo" role="button" aria-expanded="false"
                            aria-controls="logo">
                            <i class="link-icon" data-feather="mail"></i>
                            <span class="link-title">Logo</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="logo">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="{{route('logo')}}" class="nav-link">Logo List</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#banner" role="button" aria-expanded="false"
                            aria-controls="banner">
                            <i class="link-icon" data-feather="mail"></i>
                            <span class="link-title">Banner</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="banner">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="{{route('banner')}}" class="nav-link">Add Banner Class</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#service" role="button" aria-expanded="false"
                            aria-controls="service">
                            <i class="link-icon" data-feather="mail"></i>
                            <span class="link-title">Service</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="service">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="{{route('service')}}" class="nav-link">Add Service</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#counter" role="button" aria-expanded="false"
                            aria-controls="counter">
                            <i class="link-icon" data-feather="mail"></i>
                            <span class="link-title">Counter</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="counter">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="{{route('counter')}}" class="nav-link">Add Counter</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#team" role="button" aria-expanded="false"
                            aria-controls="team">
                            <i class="link-icon" data-feather="mail"></i>
                            <span class="link-title">Team</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="team">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="{{route('team')}}" class="nav-link">Add Member</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#portfolio" role="button" aria-expanded="false"
                            aria-controls="portfolio">
                            <i class="link-icon" data-feather="mail"></i>
                            <span class="link-title">Portfolio</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="portfolio">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="{{route('portfolio')}}" class="nav-link">Add Portfolio</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#test" role="button" aria-expanded="false"
                            aria-controls="test">
                            <i class="link-icon" data-feather="mail"></i>
                            <span class="link-title">Testimonial</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="test">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="{{route('testimonial')}}" class="nav-link">Add Testimonial</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#work" role="button" aria-expanded="false"
                            aria-controls="work">
                            <i class="link-icon" data-feather="mail"></i>
                            <span class="link-title">Work</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="work">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="{{route('works')}}" class="nav-link">Add New Work</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#message" role="button" aria-expanded="false"
                            aria-controls="message">
                            <i class="link-icon" data-feather="mail"></i>
                            <span class="link-title">Message</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="message">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="{{route('message')}}" class="nav-link">Messages List</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#role" role="button" aria-expanded="false"
                            aria-controls="role">
                            <i class="link-icon" data-feather="mail"></i>
                            <span class="link-title">Role</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="role">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="{{route('role')}}" class="nav-link">Role Manager</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="settings-sidebar">
            <div class="sidebar-body">
                <a href="#" class="settings-sidebar-toggler">
                    <i data-feather="settings"></i>
                </a>
                <h6 class="text-muted">Sidebar:</h6>
                <div class="form-group border-bottom">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight"
                                value="sidebar-light" checked>
                            Light
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark"
                                value="sidebar-dark">
                            Dark
                        </label>
                    </div>
                </div>
                <div class="theme-wrapper">
                    <h6 class="text-muted mb-2">Light Theme:</h6>
                    <a class="theme-item active" href="../../../demo_1/dashboard-one.html">
                        <img src="../../../assets/images/screenshots/light.jpg" alt="light theme">
                    </a>
                    <h6 class="text-muted mb-2">Dark Theme:</h6>
                    <a class="theme-item" href="../../../demo_2/dashboard-one.html">
                        <img src="../../../assets/images/screenshots/dark.jpg" alt="light theme">
                    </a>
                </div>
            </div>
        </nav>
        <!-- partial -->

        <div class="page-wrapper">

            <!-- partial:../../partials/_navbar.html -->
            <nav class="navbar">
                <a href="#" class="sidebar-toggler">
                    <i data-feather="menu"></i>
                </a>
                <div class="navbar-content">
                    <form class="search-form">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i data-feather="search"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flag-icon flag-icon-us mt-1" title="us"></i> <span
                                    class="font-weight-medium ml-1 mr-1 d-none d-md-inline-block">English</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="languageDropdown">
                                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us"
                                        title="us" id="us"></i> <span class="ml-1"> English </span></a>
                                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-fr"
                                        title="fr" id="fr"></i> <span class="ml-1"> French </span></a>
                                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-de"
                                        title="de" id="de"></i> <span class="ml-1"> German </span></a>
                                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-pt"
                                        title="pt" id="pt"></i> <span class="ml-1"> Portuguese </span></a>
                                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-es"
                                        title="es" id="es"></i> <span class="ml-1"> Spanish </span></a>
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-apps">
                            <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="grid"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="appsDropdown">
                                <div class="dropdown-header d-flex align-items-center justify-content-between">
                                    <p class="mb-0 font-weight-medium">Web Apps</p>
                                    <a href="javascript:;" class="text-muted">Edit</a>
                                </div>
                                <div class="dropdown-body">
                                    <div class="d-flex align-items-center apps">
                                        <a href="../../pages/apps/chat.html"><i data-feather="message-square"
                                                class="icon-lg"></i>
                                            <p>Chat</p>
                                        </a>
                                        <a href="../../pages/apps/calendar.html"><i data-feather="calendar"
                                                class="icon-lg"></i>
                                            <p>Calendar</p>
                                        </a>
                                        <a href="../../pages/email/inbox.html"><i data-feather="mail"
                                                class="icon-lg"></i>
                                            <p>Email</p>
                                        </a>
                                        <a href="../../pages/general/profile.html"><i data-feather="instagram"
                                                class="icon-lg"></i>
                                            <p>Profile</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-messages">
                            <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="mail"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="messageDropdown">
                                <div class="dropdown-header d-flex align-items-center justify-content-between">
                                    <p class="mb-0 font-weight-medium">9 New Messages</p>
                                    <a href="javascript:;" class="text-muted">Clear all</a>
                                </div>
                                <div class="dropdown-body">
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Leonardo Payne</p>
                                                <p class="sub-text text-muted">2 min ago</p>
                                            </div>
                                            <p class="sub-text text-muted">Project status</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Carl Henson</p>
                                                <p class="sub-text text-muted">30 min ago</p>
                                            </div>
                                            <p class="sub-text text-muted">Client meeting</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Jensen Combs</p>
                                                <p class="sub-text text-muted">1 hrs ago</p>
                                            </div>
                                            <p class="sub-text text-muted">Project updates</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Amiah Burton</p>
                                                <p class="sub-text text-muted">2 hrs ago</p>
                                            </div>
                                            <p class="sub-text text-muted">Project deadline</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Yaretzi Mayo</p>
                                                <p class="sub-text text-muted">5 hr ago</p>
                                            </div>
                                            <p class="sub-text text-muted">New record</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-notifications">
                            <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="bell"></i>
                                <div class="indicator">
                                    <div class="circle"></div>
                                </div>
                            </a>

                            @php
                                $messages = App\Models\Message::where('status', 0)->get(); 
                            @endphp
                            <div class="dropdown-menu" aria-labelledby="notificationDropdown">
                                <div class="dropdown-header d-flex align-items-center justify-content-between">
                                    <p class="mb-0 font-weight-medium">{{$messages->count()}} New Notifications</p>
                                </div>
                                <div class="dropdown-body">
                                    <form action="{{route('message.view')}}" method="GET">
                                    @csrf
                                    @foreach ($messages as $message)
                                    <button name="mes_id" value="{{$message->id}}" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="user-plus"></i>
                                        </div>
                                        <div class="content">
                                            <p>{{$message->name}} sent you a message</p>
                                            <p class="sub-text text-muted">{{$message->created_at->diffForHumans()}}</p>
                                        </div>
                                    </button>
                                    @endforeach
                                   </form>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-profile">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if (Auth::user()->photo != null)
                                <img src="{{asset('upload/user')}}/{{Auth::user()->photo}}" alt="">
                                @else
                                <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" />
                                @endif
                            </a>
                            <div class="dropdown-menu" aria-labelledby="profileDropdown">
                                <div class="dropdown-header d-flex flex-column align-items-center">
                                    <div class="figure mb-3">
                                        @if (Auth::user()->photo != null)
                                        <img src="{{asset('upload/user')}}/{{Auth::user()->photo}}" alt="">
                                        @else
                                        <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" />
                                        @endif
                                    </div>
                                    <div class="info text-center">
                                        <p class="name font-weight-bold mb-0">{{Auth::user()->name}}</p>
                                        <p class="email text-muted mb-3">{{Auth::user()->email}}</p>
                                    </div>
                                </div>
                                <div class="dropdown-body">
                                    <ul class="profile-nav p-0 pt-3">
                                        <li class="nav-item">
                                            <a href="{{route('profile')}}" class="nav-link">
                                                <i data-feather="user"></i>
                                                <span>Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:;" class="nav-link" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                                <i data-feather="log-out"></i>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                                <span>Log Out</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- partial -->

            <div class="page-content">
                @yield('content')
            </div>

            <!-- partial:../../partials/_footer.html -->
            <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
                <p class="text-muted text-center text-md-left">Copyright © 2021 <a href="https://www.nobleui.com"
                        target="_blank">NobleUI</a>. All rights reserved</p>
                <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i
                        class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
            </footer>
            <!-- partial -->

        </div>
    </div>

    <!-- core:js -->
    <script src="{{asset('backend/vendors/core/core.js')}}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- end plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('backend/vendors/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('backend/js/template.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- endinject -->
    <!-- custom js for this page -->
    <!-- end custom js for this page -->
    @yield('footer_script')
</body>

</html>
