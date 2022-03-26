@extends('publicSite.layout.master')
@section('style')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Merriweather&family=Mochiy+Pop+One&family=Mohave&display=swap');
    h1,h2,h3,h4,h5,h6 {
        font-family: "Barlow Condensed", sans-serif !important;
    }
    .mypara {
        font-size: 14px ;
        line-height: 1.6;
        font-family: Arial, Helvetica, sans-serif !important;
    }
</style>
@endsection

@section('content')


<section class="page-header" style="background-image: url({{asset('assets/images/backgrounds/page-header-contact.jpg')}}) ; padding-top:200px;">
    <div class="container">
        <h2>Seller Profile</h2>
        <ul class="thm-breadcrumb list-unstyled s">
            <li><a href="{{ route('home2')}}">Home</a></li>
            <li><span>User Profile</span></li>
        </ul>
    </div>
</section>
<!-- Sahar Start -->
<section class="user_profile">
    <div class="container">
        <div class="row">
            <!-- Guide Information -->
            <div class="col-4 guide-info">
                <img src="{{asset('user_images/'. $user->image)}}" alt="guide_photo" class="user_img">
                <h2 class="text-center pl-0">{{$user->name}}</h2>
                <div class="container">
                    <div class="row contact_info flex-row justify-content-center align-content-between mt-2">
                    <div class="box d-flex flex-column mr-3 align-items-center">
                    <span class="mb-2"><i class="fas fa-envelope"></i></span>
                    <span><i class="fas fa-mobile-alt"></i></span>
                    </div>
                    <div class="box d-flex flex-column align-items-start">
                    <span>{{ $user->email}}</span>
                    <span style="margin-top: 7px">{{$user->phone}}</span>
                    </div>
                    </div>
                </div>
            </div>
            <!--seller products -->
            <div class="col-8 guide-trips">
                <h1 class="mb-5" style="color:#E0DDAA">{{$user->name." Products"}}</h1>
                <!-- products -->
                <div class="trip mt-2">
                    <div class="container">
                        <!-- product Information -->
                        @foreach ($seller_products as $product)
                        <div class="row">
                            <div class="col-5">
                                <img src="{{asset("sellerproducts/".$product->image)}}" alt="trip_image" class="trip_img">
                            </div>
                            <div class="col-7">
                                <h4 style="text-transform: capitalize; color:#555"> {{$product->name}}</h4>
                                <p class="mypara">Size: {{$product->size}}</p>
                                <h6 style="color:#E0DDAA">Price: {{$product ->price }} JD</h6>
                                <a href="{{route('product-details.show',$product->id)}}"><button class="btn show-trip mt-3">Show</button></a>
                            </div>
                        </div>
                        <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sahar End -->
@endsection
