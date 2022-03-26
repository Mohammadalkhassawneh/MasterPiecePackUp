<!DOCTYPE html>

<html lang="en">
<head>
       {{-- <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> --}}

    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->

    <link href={{asset("css/font-face.css")}}rel="stylesheet" media="all">
    <link href={{asset("/vendor/font-awesome-4.7/css/font-awesome.min.css")}} rel="stylesheet" media="all">
    <link href={{asset("/vendor/font-awesome-5/css/fontawesome-all.min.css")}} rel="stylesheet" media="all">
    <link href={{asset("/vendor/mdi-font/css/material-design-iconic-font.min.css")}} rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href={{asset("/vendor/bootstrap-4.1/bootstrap.min.css")}} rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href={{asset("vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css")}} rel="stylesheet" media="all">
    <link href={{asset("vendor/wow/animate.css")}} rel="stylesheet" media="all">
    <link href={{asset("vendor/css-hamburgers/hamburgers.min.css")}} rel="stylesheet" media="all">
    <link href={{asset("vendor/slick/slick.css")}}  rel="stylesheet" media="all">
    <link href={{asset("vendor/select2/select2.min.css")}} rel="stylesheet" media="all">
    <link href={{asset("vendor/perfect-scrollbar/perfect-scrollbar.css")}} rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href={{asset("/css/theme.css")}} rel="stylesheet" media="all">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <style>
        .color-white:hover {
            color: white
        }

    </style>

</head>

<body class="animsition">

    <div class="page-wrapper" style="min-height: 100vh">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
           <div class="logo" style="background: #333">
                <a href="{{route('admin')}}">
                    <img class="admin-logo" src="{{asset("assets/images/hanger.png")}}" alt="Tripo Admin" style="display: block;max-width: 70%;margin-left: auto;margin-right: auto;" />
                </a>
            </div>
                        <button class="hamburger hamburger--slider mr-3" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="{{route("admin")}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{route("user.index")}}">
                                <i class="fas fa-chart-bar"></i>Users</a>
                        </li>
                        <li>
                            <a href="{{ route('categories.index')}}">
                                <i class="fas fa-table"></i>categories</a>
                        </li>
                        <li>
                            <a href={{ asset('trips') }}>
                                <i class="far fa-check-square"></i>Trips</a>
                        </li>
                        <li>
                            <a href={{route('reservation.index')}}>
                                <i class="fas fa-calendar-alt"></i>Reservation</a>
                        </li>

                    </ul>
                    </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo" style="background: #333">
                <a href="{{route('admin')}}">
                    <img class="admin-logo" src="{{asset("assets/images/hanger.png")}}" alt="Tripo Admin" style="display: block;max-width: 70%;margin-left: auto;margin-right: auto;" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="{{(request()->segment(1) == 'admin') ? 'active' : '' }}">
                            <a class="js-arrow" href="{{route('admin')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="{{(request()->segment(1) == 'user') ? 'active' : '' }}">
                            <a href="{{route("user.index")}}">
                                <i class="fas fa-chart-bar"></i>Users</a>
                        </li>
                        <li class="{{(request()->segment(1) == 'categories') ? 'active' : '' }}">
                            <a href="{{ route('categories.index')}}">
                                <i class="fas fa-table"></i>Categories</a>

                        </li>
                        <li class="{{(request()->segment(1) == 'products') ? 'active' : '' }}">
                            <a href="{{ route('products.index')}}">
                                <i class="far fa-check-square"></i>Products</a>
                        </li>
                        <li class="{{(request()->segment(1) == 'reservation') ? 'active' : '' }}">
                            <a href="{{route('reservation.index')}}">
                                <i class="fas fa-calendar-alt"></i>Reservation</a>
                        </li>

                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->


        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap justify-content-end">
                            <div class="header-button justify-content-end">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                           <img src="{{asset("user_images/". Auth::user()->image)}}" alt="Admin image" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn"></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a>
                                                        <img src="{{asset("user_images/". Auth::user()->image)}}" alt="Admin image" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="">{{ Auth::user()->name }}</a>
                                                    </h5>
                                                    <span class="email">{{Auth::user()->email}}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                        <i class="zmdi zmdi-power"></i>
                                                        {{ __('Logout') }}
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                    </a>
                                                </div>
                                                <div class="account-dropdown__footer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
