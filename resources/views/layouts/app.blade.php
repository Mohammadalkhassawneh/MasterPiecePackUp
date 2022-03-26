<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tripo || Internal Tours</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">

    <!-- plugin scripts -->


    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:200,300,400,400i,500,600,700,800,900%7CSatisfy&amp;display=swap" rel="stylesheet">


    <link rel="stylesheet" href={{asset("assets/css/animate.min.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/owl.carousel.min.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/owl.theme.default.min.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/magnific-popup.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/fontawesome-all.min.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/swiper.min.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/bootstrap-select.min.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/tripo-icons.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/jquery.mCustomScrollbar.min.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/bootstrap-datepicker.min.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/vegas.min.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/nouislider.min.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/nouislider.pips.css")}}>

    <!-- template styles -->
    <link rel="stylesheet" href={{asset("assets/css/style.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/responsive.css")}}>

    <style>
        .sign-my:hover {
            color: #ff0143 !important;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>

    @yield('style')

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        a {
            text-decoration: none;
        }

        .site-header__header-one {
            position: initial;
            background-color: #082740;
            padding-top: 20px;
        }

    </style>

</head>
<body>
    <div id="app">

        <div class="page-wrapper">
        <div class="site-header__header-one site-header__home-two-wrap">
            <header class="main-nav__header-one site-header__home-two" style="background-color:#082740">
                <nav class="header-navigation stricky">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="main-nav__logo-box">
                            <a href="{{route('home2')}}" class="main-nav__logo">
                                <img src={{asset("assets/images/hanger.png")}} class="main-logo" width="123" alt="Awesome Image" />
                            </a>
                            <a href="#" class="side-menu__toggler"><i class="fa fa-bars"></i></a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="main-nav__main-navigation">
                            <ul class=" main-nav__navigation-box">
                                <li class="dropdown current">
                                    <a href={{route("home2")}}>Home</a>
                                </li>
                                <li class="dropdown">
                                    <a href="{{route("categories")}}">Categories</a>

                                </li>
                                <li class="dropdown">
                                    <a href="{{route("shop.index")}}">Shop</a>
                                </li>

                                <li class="dropdown">
                                    <a href="tour-guide">Sellers</a>
                                </li>

                                <li>
                                    <a href="contact">Contact</a>
                                </li>

                            </ul>
                        </div>
                        <div class="main-nav__right">
                            <ul class="navbar-nav ms-auto flex-row">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item mr-4">
                                            <a class="nav-link text-white sign-my" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item mr-4">
                                            <a class="nav-link text-white sign-my" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li>
                                        <a class="p-5 text-white" role="button" style="padding-right:40px !important;" >
                                            {!!   "Welocme, " .  "<span style='color:#FFA801'>".Auth::user()->name."</span>" !!}
                                        </a>
                                    </li>
                                    <div>
                                        <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            <button class="btn btn-danger mr-5">
                                            {{   __('Logout') }}
                                            </button>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>

                                    </div>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
