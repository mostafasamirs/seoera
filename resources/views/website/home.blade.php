@extends('website.layouts.app')
@section('content')

<main class="main">
    <!--Products Tabs-->
    <section class="section-padding pb-5">
        <div class="container">
            <div class="section-title wow animate__animated animate__fadeIn">
                <h3 class="actived">products</h3>
                <ul class="nav nav-tabs links" id="myTab-2" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a href="{{route('products')}}" class="nav-link active">All Products</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                    <div class="tab-content" id="myTabContent-1">
                        <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1">
                            <div class="carausel-4-columns-cover arrow-center position-relative">
                                <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-arrows"></div>
                                <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">

                                    @forelse ($products as $product)

                                    <div class="product-cart-wrap" style="text-align: end;">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{route('product',$product->id)}}">
                                                    <img class="default-img" src="{{asset($product->image)}}" alt="" />
                                                    <img class="hover-img" src="{{asset($product->image)}}" alt="" />
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn small hover-up" href="{{route('product',$product->id)}}"> <i class="fi-rs-eye"></i></a>
                                                <a aria-label="Compare" class="action-btn small hover-up" href="{{route('product',$product->id)}}"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">{{$product->languages->title}}</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <h2><a href="{{route('product',$product->id)}}">{{$product->name}}</a></h2>
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 100%"></div>
                                            </div>
                                            <div class="product-price mt-1 mb-2">
                                                <span>{{$product->salary}} </span>
                                                <span class="old-price">{{$product->discount}} </span>

                                            </div>
                                            <a href="{{route('product',$product->id)}}" class="btn w-100 hover-up"><i class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                        </div>
                                    </div>

                                    @empty

                                    @endforelse

                                </div>
                            </div>
                        </div>
                        <!--End tab-pane-->
                    </div>
                    <!--End tab-content-->
                </div>
                <!--End Col-lg-9-->
            </div>
        </div>
    </section>
    <!--End Best Sales-->
    <br>
    <!--End 4 columns-->
</main>

@endsection
@section('script')

@endsection
