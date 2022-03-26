<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="descrption" content="Tripo is a website for internal tours in Jordan, you can book your tour in an easy way and you can join as guide in our team">
    <title>Second Chance</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/tileicon2.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/tileicon2.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/tileicon2.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">

    <!-- plugin scripts -->


    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:200,300,400,400i,500,600,700,800,900%7CSatisfy&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">


    <link rel="stylesheet" href='{{asset("assets/css/animate.min.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/bootstrap.min.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/owl.carousel.min.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/owl.theme.default.min.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/magnific-popup.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/fontawesome-all.min.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/swiper.min.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/bootstrap-select.min.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/tripo-icons.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/jquery.mCustomScrollbar.min.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/bootstrap-datepicker.min.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/vegas.min.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/nouislider.min.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/nouislider.pips.css")}}'>

    <!-- template styles -->
    <link rel="stylesheet" href='{{asset("assets/css/style.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/responsive.css")}}'>

    <link rel="stylesheet" href="{{asset("assets/css/guide_style.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/user_profile.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/add_trip.css")}}">

    @yield('style')

    <style>
        .sign-my:hover {
            color: #ff0143 !important;
        }

        @media(max-width:768px) {
            .main-nav__right {
                display: none;
            }
        }
    </style>



<body>

    <div class="preloader">
        <img src='{{asset("assets/images/loader.jpg")}}' class="preloader__image h-25 w-25 img-responsive" alt="">
    </div>
    <div class="page-wrapper">
        <div class="site-header__header-one site-header__home-two-wrap">

            <header class="main-nav__header-one site-header__home-two" style="background-color:#141E27">
                <nav class="header-navigation stricky">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="main-nav__logo-box" style="margin-left: 50px;">
                            <a href="{{ route('home2') }}" class="main-nav__logo">
                                <img src={{asset("assets/images/hanger.png")}} class="main-logo" width="123" alt="Awesome Image" />
                            </a>
                            <a class="side-menu__toggler"><i class="fa fa-bars"></i></a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="main-nav__main-navigation">
                            <ul class=" main-nav__navigation-box">
                                <li class="dropdown current">
                                    <a href={{route("home2")}}>Home</a>
                                </li>
                                        <li><a href="{{route("categories")}}">Categories</a> </li>
                                        <li><a href="{{route("shop.index")}}">Shop</a> </li>
                                        <li>  <a href="{{route('productSeller.index')}}">Sellers</a> </li>
                                <li>
                                    <a href="{{route("contact")}}">Contact</a>
                                </li>
                                @auth
                                @if(Auth::user()->role_type == "seller")
                                <li>
                                    <a href="{{route('sell.create', Auth::user()->id)}}">Sell</a>
                                </li>
                                @endif
                                @endauth
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
                                    <a class="p-5 text-white" role="button" style="padding-right:40px !important;">
                                        {!! "Welocme, " . "<span style='color:#E0DDAA'>".Auth::user()->name."</span>" !!}
                                    </a>
                                </li>
                                <div>
                                    <a class="" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <button class="btn mr-5" style="background-color: #E0DDAA">
                                            {{ __('Logout') }}
                                        </button>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                @endguest
                            </ul>
                            <a href="" class="text-white search-popup__toggler"><i class="tripo-icon-magnifying-glass"></i></a>
                            @auth <a href="{{route("userprofile.index")}}" class="main-nav__login"><i class="tripo-icon-avatar"></i></a>@endauth
                        </div>
                    </div>
                </nav>
            </header>
        </div>
