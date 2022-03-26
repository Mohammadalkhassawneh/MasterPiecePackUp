@extends('publicSite.layout.master')



@section('content')

       <section class="page-header" style="background-image: url(assets/images/backgrounds/seller.jpg);">

            <div class="container" style="margin-top:145px;">
                <h2>Sellers</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{route('home2')}}">Home</a></li>
                    <li><span>Sellers</span></li>
                </ul><!-- /.thm-breadcrumb -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->


<section class="team-one">
    <div class="container">
        <div class="row">
            @foreach ($sellers as $seller)

            <div class="col-lg-4 col-md-6">
                <div class="team-one__single">
                    <div class="team-one__image" style="height: 360px;">

                        <a href="{{route('seller',$seller->id)}}">

                            <img src='{{asset("user_images/". $seller->image)}}' alt="guide_image"  style="display: block; width: 100%;height: 100%;"></a>

                    </div>
                    <div class="team-one__content">
                        <a href="{{route('seller',$seller->id)}}"><h3>{{$seller->name}}</h3></a>
                        <p class="text-uppercase">Seller</p>
                        <a href="{{route('seller',$seller->id)}}"><button class="btn mt-3" style="background-color: #EEEDDE">Show Profile</button></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="cta-one">
    <div class="container">
        <h3>Dont hesitate to start sell your clothes!</h3>
        <div class="cta-one__button-block">
            <a href="{{ asset('register')}}" class="thm-btn cta-one__btn">Join our team</a><!-- /.thm-btn cta-one__btn -->
        </div><!-- /.cta-one__button-block -->
    </div><!-- /.container -->
</section><!-- /.cta-one -->
@endsection
