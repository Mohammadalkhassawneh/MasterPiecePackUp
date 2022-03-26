@extends('publicSite.layout.master')
@section("style")
<style>

.page-item:first-child .page-link,
.page-item:last-child .page-link {
    border-radius: 50%;
    background-color: var(--thm-gray);
    color: #9ca3a9;
    font-size: 18px;
    font-weight: 600;
    text-align: center;
    padding: 0;
    display: -webkit-box;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    width: 57px;
    height: 57px;
    -webkit-transition: all .4s ease;
    transition: all .4s ease;
}

.page-item {
    margin: 0 5px !important;
}

.page-item.disabled span.page-link {
    background-color: #ECEEEF !important;
}

.page-item:first-child .page-link:hover,
.page-item:last-child .page-link:hover {
    background-color: #40b9eb;
    color: #fff;
}

span.page-link {
    width: 57px;
    height: 57px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background-color: #E0DDAA !important;
    border: none;
}
</style>

@endsection


@section('content')
        <section class="blog-list" style="margin-top: 150px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                         <div class="row">
                        @if(count($products) > 0)
                        @foreach ($products as $product)
                       
                        <div class="col-lg-3" >
                        <div class="blog-two__single blog-one__single" >
                            <div class="row">
                                <div class="col-md-12" style="height: 18rem">
                                    <div class="blog-one__image" style="height: 15rem">
                                        <img src="{{asset("sellerproducts/".$product->image)}}" alt="">
                                        <a href="{{route('product-details.show',$product->id)}}"><i class="fa fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                                
                                    <div class="blog-two__content my-auto">
                                        <ul class="list-unstyled blog-one__meta">
                                            <li><a href="{{route('seller',$product->seller->id)}}"><i class="far fa-user-circle"></i>{{$product->seller->name}}</a></li>
                                            {{-- <li><a><i class="far fa-calendar-alt"></i>{{ $product->date }}</a></li> --}}
                                        </ul>
                                        <h5><a style="color: #203239" href="{{route('product-details.show',$product->id)}}">{{ $product->name }}</a></h5>
                                       
                                        <a href="{{route('product-details.show',$product->id)}}" class="blog-two__link">Read More</a>
                                    </div>
                                
                                
                            </div><!-- /.row -->
                        </div><!-- /.blog-two__single -->
                   
                </div>
                        @endforeach
            </div>
                        @else
                            <h1 class="text-center" style="font-family: Arial, Helvetica, sans-serif">No Result Found <i class="fas fa-search ml-3"></i></h1>
                        @endif

                        <div class="post-pagination">
                            @isset($status)
                            {!! $products->links() !!}
                            @endisset
                        </div><!-- /.post-pagination -->
                    
                    </div>
                    <div class="col-lg-3">
                        <div class="sidebar">

                        
                            <div class="sidebar__single sidebar__category">
                                <h3 class="sidebar__title">All Categories</h3><!-- /.sidebar__title -->
                                <ul class="sidebar__category-list list-unstyled">
                                    @foreach ($cats as $cat)

                                    <li><a href="{{route('shop.show', $cat->id)}}"> {{$cat->category_name}} </a></li>
                                    @endforeach


                                </ul><!-- /.sidebar__category-list list-unstyled -->
                            </div><!-- /.sidebar__single sidebar__category -->


                            <div class="sidebar__single sidebar__social">
                                <h3 class="sidebar__title">Follow Us</h3><!-- /.sidebar__title -->
                                <div class="sidebar__social-list">
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div><!-- /.sidebar__social-list -->
                            </div><!-- /.sidebar__single sidebar__twitter -->
                        </div><!-- /.sidebar -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
       
        </section><!-- /.blog-list -->


        @endsection
