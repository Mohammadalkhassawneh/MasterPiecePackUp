@extends('publicSite.layout.master')
@section('style')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather&family=Mochiy+Pop+One&family=Mohave&display=swap');

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Barlow Condensed", sans-serif !important;
        }

        .mypara {
            font-size: 14px;
            line-height: 1.6;
            font-family: Arial, Helvetica, sans-serif !important;
        }

    </style>
@endsection

@section('content')


    <section class="page-header"
        style="background-image: url(assets/images/backgrounds/secondhandbackgound.jpg); padding-top:200px;">
        <div class="container">
            <h2>User Profile</h2>
            <ul class="thm-breadcrumb list-unstyled s">
                <li><a href="{{ route('home2') }}">Home</a></li>
                <li><span>User Profile</span></li>
            </ul>
        </div>
    </section>
    <!-- Sahar Start -->
    <section class="user_profile">
        <div class="container">
            <div class="row">
                <div class="col-4 guide-info">
                    <img src="{{ asset('user_images/' . Auth::user()->image) }}" alt="guide_photo" class="user_img">
                    <h2 class="text-center pl-0">{{ Auth::user()->name }}</h2>
                    <div class="container">
                        <div class="row contact_info flex-row justify-content-center align-content-between mt-2">
                            <div class="box d-flex flex-column mr-3 align-items-center">
                                <span class="mb-2"><i class="fas fa-envelope"></i></span>
                                <span><i class="fas fa-mobile-alt"></i></span>
                            </div>
                            <div class="box d-flex flex-column align-items-start">
                                <span>{{ Auth::user()->email }}</span>
                                <span style="margin-top: 7px">{{ Auth::user()->phone }}</span>
                            </div>
                        </div>
                        <a class="d-block mt-3" href="{{ route('userprofile.edit', Auth::user()->id) }}"><button
                                class="btn text-black" style=" background-color: #203239;color: white; width:130px">Edit
                                Profile</button></a>
                        @if (Auth::user()->role_type == 'seller')
                            <a class="d-block mt-3" href="{{ route('sell.create', Auth::user()->id) }}"><button
                                    class="btn text-black"
                                    style="width:85px; background-color: #203239;color: white; width:130px">Add
                                    Product</button></a>
                            <a class="d-block mt-3" href="{{ route('sellerReservation', Auth::user()->id) }}"><button
                                    class="btn text-black"
                                    style="width:85px; background-color: #203239;color: white; width:130px">Show
                                    Products</button></a>
                        @endif
                    </div>
                </div>
                <!-- Guide Trips -->
                @if (Auth::user()->role_type == 'seller')
                    <div class="col-8 guide-trips">
                        <h1 class="mb-5" style="color:#E0DDAA">My Products</h1>
                        <!-- Trips -->
                        <div class="trip mt-2">
                            <div class="container">
                                <!-- Trip Information -->
                                @foreach ($products as $product)
                                    <div class="row">
                                        <div class="col-5">
                                            <img src="{{ 'sellerproducts/' . $product->image }}" alt="trip_image"
                                                class="trip_img">
                                        </div>
                                        <div class="col-7">
                                            <h4 style="text-transform: capitalize; color:#555">Name: {{ $product->name }}
                                            </h4>
                                            <p class="mypara">Size: {{ $product->size }}</p>
                                            <h6 style="color:#E0DDAA">Price: {{ $product->price }} JD</h6>
                                            <a href="{{ route('product-details.show', $product->id) }}"><button
                                                    class="btn show-trip mt-3"
                                                    style="background-color: #E0DDAA">Show</button></a>
                                            <form action="{{ route('sell.destroy', $product->id) }}" method="POST"
                                                class='deletion'>
                                                @csrf
                                                @method("delete")
                                                <button type="submit" class="btn show-trip"
                                                    style="margin-top: 15px; margin-left: 10px; background-color:#DC3545">
                                                    Delete
                                                </button>
                                            </form>
                                            <a href="{{ route('sell.edit', $product->id) }}"><button
                                                    style="margin-top: 15px; margin-left: 10px; background-color:#E0DDAA"
                                                    class="btn show-trip">Edit</button></a>
                                        </div>
                                    </div>
                                    <hr>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
                {{-- User Reservations --}}
                @if (Auth::user()->role_type == 'user')
                    <div class="col-8 guide-trips">
                        <h1 class="mb-5" style="color:#E0DDAA">Your products</h1>

                        @if (Session::has('reservation'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('reservation') }}
                                {{ Session::forget('reservation') }}
                            </div>
                        @endif

                        <!-- Trips -->
                        <div class="trip mt-2">
                            <div class="container">
                                <!-- Trip Information -->

                                @forelse ($reservations as $reservation)
                                    <div class="row">
                                        <div class="col-5">
                                            <img src="{{ asset('sellerproducts/' . $reservation->image) }}"
                                                alt="trip_image" class="trip_img">
                                        </div>
                                        <div class="col-7">
                                            <h4 style="text-transform: capitalize; color:#555">Name:
                                                {{ $reservation->name }}</h4>
                                            <p class="mypara">Description: {{ $reservation->description }}</p>
                                            <h6 style="color:#E0DDAA">Price: {{ $reservation->price }} JD</h6>
                                            <h6 style="color:#E0DDAA">Hold Date: {{ $reservation->pivot->hold_date }}
                                            </h6>
                                            <a href="{{ route('product-details.show', $reservation->id) }}"><button
                                                    class="btn show-trip mt-3">Show Product</button></a>
                                            <a href="{{ route('deleteReservations', $reservation->pivot->id) }}"><button
                                                    class="btn btn-danger mt-3">Delete</button></a>
                                        </div>
                                    </div>
                                    <hr>
                                @empty
                                    <h2 style="margin-top:70px">You don't have any Product, <a
                                            href="{{ route('shop.index') }}">We wish you to book one</a></h2>
                                @endforelse
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!-- Sahar End -->
@endsection
