@extends('publicSite.layout.master')
@section('content')
    <section class="banner-two">
        <div class="banner-two__bg">
            <div class="banner-two__bg-inner"
                data-options='{ "delay": 5000, "slides": [ { "src": "assets/images/backgrounds/banner-2-bg-1.jpg" }, { "src": "assets/images/backgrounds/banner-2-bg-2.jpg" }, { "src": "assets/images/backgrounds/banner-2-bg-3.jpg" } ], "transition": "fade", "timer": false }'>
            </div><!-- /.banner-two__bg-inner -->
        </div><!-- /.banner-two__bg -->
        <img src="assets/images/shapes/banner-two__flotated-text.png" alt="" class="banner-two__floated-text mb-5">
        <div class="container ">
            <div class="mb-5">
                <p>Second Hand</p>
                <h2>Clothes</h2>
            </div>

            <div style="margin-left: 70px;">
                <a class="thm-btn rounded" href="{{ route('shop.index') }}">Explore Now</a>
            </div>
        </div>
    </section>

    <section class="destinations-three">
        <div class="container">
            <div class="block-title text-center">
                <p>Explore</p>
                <h3>Categories</h3>
            </div>
            <div class="row">
                @foreach ($category as $categories)
                    <div class="col-lg-4 w-100 col-md-6">
                        <div class="destinations-three__single">
                            <img style="height: 45vh" src="uploads/{{ $categories->category_img }}" alt="">
                            <div class="destinations-three__content">
                                <h3><a
                                        href="{{ route('shop.show', $categories->id) }}">{{ $categories->category_name }}</a>
                                </h3>
                            </div>
                            <div class="destinations-three__hover-content">
                                <h3><a
                                        href="{{ route('shop.show', $categories->id) }}">{{ $categories->category_name }}</a>
                                </h3>
                                <p>{{ $categories->product->count() . ' Products' }}</p>
                                <a href="{{ route('shop.show', $categories->id) }}  " class="destinations-three__link"><i
                                        class="tripo-icon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="cta-one cta-one__home-two ">
        <div class="container" style="padding-top: 5em; padding-bottom:5em">
            <div class="d-flex justify-content-around">

                <!-- /.thm-btn cta-one__btn -->
                <div style="margin-top:5em; padding-right:2em;">
                    <h4 class="h4Content">Second Hand is the safe and simple way to sell <br> pre-loved pieces to buy
                        something
                        new.</h4>
                    <a href="{{ route('shop.index') }}" class="thm-btn cta-one__btn btn">Start
                        Selling!</a>
                </div>
                <div>
                    <img src="{{ asset('images/95959.png') }}" alt="" style="width: 20rem">
                </div>
            </div>

        </div>

    </section>
    <section class="tour-one">
        <div class="container">
            <div class="block-title text-center">
                <p>Best Seller</p>
                <h3>Most Popular Items</h3>
            </div>

            <div class="tour-one__carousel tour-one__carousel-no-overflow thm__owl-carousel  owl-carousel owl-theme"
                data-options='{"nav": false, "autoplay": true, "autoplayTimeout": 5000, "smartSpeed": 700, "dots": true, "margin": 30, "loop": true, "responsive": { "0": { "items": 1, "nav": true, "navText": ["Prev", "Next"], "dots": false }, "767": { "items": 1, "nav": true, "navText": ["Prev", "Next"], "dots": false }, "991": { "items": 2 }, "1199": { "items": 2 }, "1200": { "items": 3 } }}'>
                @foreach ($product as $products)
                    <div class="item">


                        <div class="tour-one__single">
                            <div class="tour-one__image">
                                <img style="min-width:35wh; max-height:30vh"
                                    src="{{ asset('sellerproducts/' . $products->image) }}" alt="">
                            </div>

                            <div class="tour-one__content" style="min-height: 350px">
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="{{ route('seller', $products->seller->id) }}"><i></i>
                                            {{ 'Seller: ' . $products->seller->name }}</a></li>
                                </ul>

                                <h3><a
                                        href="{{ route('product-details.show', $products->id) }}">{{ $products->name }}</a>
                                </h3>
                                <p><span>{{ $products->price . 'JD' }}</span></p>
                                <p><span>{{ 'Size: ' . $products->size }}</span></p>
                                <ul class="tour-one__meta list-unstyled">
                                    <li><a href="{{ route('shop.show', $products->category->id) }}"><i
                                                class="far fa-list-alt"></i>{{ $products->category->category_name }}</a>
                                    </li>
                                </ul>
                            </div>


                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <section class="cta-four img-responsive" style="background-image: url(assets/images/gallery/secondhandbackgound.jpg);">
        <div class="container">
            <h3><span style="color:white">Second Chance</span> is the new organic.</h3>
            <p>When you buy presolved clothed, you do not add chemicals or prodiction stress to the environment. Everything
                else is various shades of greenwashing</p>
        </div>
    </section>


    <section class="blog-one">
        <div class="container">
            <div class="block-title text-center">
                <p>Check out Our</p>
                <h3>Latest Clothes</h3>
            </div>
            <div class="row">
                @foreach ($news as $productDate)
                    <div class="col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img style="min-width:35wh; max-height:30vh"
                                    src="{{ asset('sellerproducts/' . $productDate->image) }}" alt="">
                                <a href="{{ route('product-details.show', $productDate->id) }}"><i
                                        class="fa fa-long-arrow-alt-right"></i></a>
                            </div>
                            <div class="blog-one__content" style="min-height:280px">
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="{{ route('seller', $productDate->seller->id) }}"><i></i>
                                            {{ 'Seller: ' . $productDate->seller->name }}</a></li>
                                </ul>
                                <h3><a
                                        href="{{ route('product-details.show', $productDate->id) }}">{{ $productDate->name }}</a>
                                </h3>
                                <h6>Size: {{ $productDate->size }}</h6>
                                <ul class="tour-one__meta list-unstyled">
                                    <li><a href="{{ route('shop.show', $productDate->category->id) }}"><i
                                                class="far fa-map"></i>{{ $productDate->category->category_name }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="mailchimp-one">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h3 style="color: black">Get Latest Clothes Updates <br>
                        by Sign Up</h3>
                </div>
                <div class="col-lg-5">

                    <a href="{{ asset('register') }}" class="thm-btn mailchimp-one__btn">SIGN UP NOW</a>

                    <div class="mc-form__response"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
