@extends('website.layouts.app')
@section('content')

<main class="main">
    <section class="product-tabs section-padding position-relative">
        <div class="container">
            <div class="section-title style-2 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                <h3>Products</h3>
                <ul class="nav nav-tabs links" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">All</button>
                    </li>
                </ul>
            </div>
            <!--End nav-tabs-->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                    <div class="row product-grid-4">

                        @forelse ($products as $product)

                        <div class="col-xl-3 col-lg-1-3 col-md-6 col-12 col-sm-12" style="text-align: end;">
                            <div class="product-cart-wrap mb-30 wow animate__ animate__fadeIn animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{route('product',$product->id)}}">
                                            <img class="default-img" src="{{asset($product->image)}}" alt="">
                                            <img class="hover-img" src="{{asset($product->image)}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Compare" class="action-btn" href="{{route('product',$product->id)}}"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">{{$product->languages->title}}</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">

                                    <h2><a href="{{route('product',$product->id)}}">{{$product->name}}</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 100%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="{{$settings->facebook}}">{{$settings->title}}</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>{{$product->salary}} </span>
                                            <span class="old-price">{{$product->discount}} </span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="{{route('product',$product->id)}}"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @empty

                        @endforelse
                        <div class="row">

                            <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                {!! $products->links() !!}
                            </div>
                        </div>

                        <!--end product card-->
                    </div>
                    <!--End product-grid-4-->
                </div>
                <!--En tab one-->
            </div>
            <!--End tab-content-->
        </div>
    </section>
</main>

@endsection
@section('script')

@endsection
