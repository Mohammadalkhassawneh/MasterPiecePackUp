@extends('publicSite.layout.master')

@section('content')

<section class="page-header" style="background-image:url(../assets/images/backgrounds/background3.jpg);margin-top: 145px">
    <div class="container">
        <h2>Product Details</h2>
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="{{route('home2')}}">Home</a></li>
            <li><span>Product Details</span></li>
        </ul><!-- /.thm-breadcrumb -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="blog-list">
    <div class="container">
        <div class="row product-details">
            <div class="col-lg-6">
<!-- /.blog-details__image -->
                <div class="blog-details__image d-flex justify-content-center">

                    <img src="{{asset("sellerproducts/".$productDetails->image)}}" alt="" class="img-responsive" style="height: 25rem">

                </div>
            </div>
            <div class="col-lg-6">
                <div class="blog-details__content">
                    
                    <ul class="list-unstyled blog-one__meta">
                        <li><a href="{{route('seller',$productDetails->seller_id)}}"><i class="far fa-user-circle"></i> {{$productDetails->seller->name}}</a></li>
                        <li><a><i class="far fa-calendar-alt"></i> {{$productDetails->date}}</a></li>
                    </ul><!-- /.list-unstyled blog-one__meta -->
                    <h3>{{$productDetails->name}}</h3><br>
                    <h5>Size: {{$productDetails->size}}</h5>

                    <br>
                                {{-- ======================= --}}


                        <!-- Button trigger modal -->
                        <button type="button" style="padding: 6px 15px; background-color:#E0DDAA" class="edit-product" data-toggle="modal" data-target="#exampleModalCenter">
                            Buy Now!
                           </button>
                        </div>
                    </div>
                           <!-- Modal -->

                           <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                             <div class="modal-dialog modal-dialog-centered" role="document">
                               <div class="modal-content">
                                 <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                   </button>
                                 </div>
                                 <div class="modal-body">
                                   Your Request Will be sent to the Seller, The Seller Will contact you within 24 hours
                                 </div>
                                 <div class="modal-footer">
                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                   @auth
                                    <form action="{{route('reservation.store')}}" method="Post">
                                    @csrf
                                    <input type="hidden" value="{{$productDetails->id}}" name="product_id">
                                     <button class="edit-trip "  type="submit"  onclick="{{Session::put("reservation","Your Request successfully sent!")}}" style="background-color: #E0DDAA">Send requet </button>
                                    </form>
                                    @endauth
                                    @guest
                                    <form action="/register" method="get">
                                     <button class="edit-trip"  type="submit" style="background-color: #E0DDAA">Send requet </button>
                                    </form>
                                    @endguest
                                 </div>
                               </div>
                             </div>
                           </div>

        
                </div><!-- /.blog-details__content -->

            </div><!-- /.col-lg-8 -->
            <div class="col-lg-4">
                <div class="sidebar">
                    @section('style')
                    <style>
                        @import url('https://fonts.googleapis.com/css2?family=Merriweather&family=Mochiy+Pop+One&family=Mohave&display=swap');
                        h1,h2,h3,h4,h5,h6 {
                            font-family: "Barlow Condensed", sans-serif !important;
                        }
                        </style>
                        @endsection

                </div><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-list -->

@endsection
