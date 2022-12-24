@extends('website.layouts.app')
@section('content')

<main class="main">
    <div class="container mb-30 stylenew" style="transform: none;" style="text-align: end!important;">

        <div class="row" style="transform: none;" style="text-align: end!important;">
            <div class="col-xl-11 col-lg-12 m-auto" style="transform: none;">
                <div class="row flex-row-reverse" style="transform: none;">
                    <div class="col-xl-7">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-10 mt-30">
                                <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                    <div class="detail-gallery">
                                        <!-- MAIN SLIDES -->
                                        <div class="product-image-slider slick-initialized slick-slider">
                                            <div class="slick-list draggable">
                                                <div class="slick-track" style="opacity: 1; width: 5010px; transform: translate3d(334px, 0px, 0px);">


                                                    <figure class="border-radius-10 slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 334px;">
                                                        <img src="{{asset($product->image)}}" alt="product image">
                                                    </figure>
                                                    <figure class="border-radius-10 slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="width: 334px;">
                                                        <img src="{{asset($product->image)}}" alt="product image">
                                                    </figure>
                                                </div>
                                            </div>






                                        </div>
                                        <!-- THUMBNAILS -->
                                    </div>
                                    <!-- End Gallery -->
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 stylelanguages">
                                    <div class="detail-info pr-30 pl-30">
                                        <span class="stock-status out-stock"> {{$product->languages->title}} </span>
                                        <h2 class="title-detail">{{$product->name}}</h2>
                                        <div class="product-detail-rating">
                                            <div class="product-rate-cover text-end">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 100%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <span class="current-price text-brand">{{$product->salary}} </span>
                                                <span>
                                                    <span class="old-price font-md ml-15">{{$product->discount}}</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="tab-style3">
                                    <ul class="nav nav-tabs text-uppercase">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Description</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content shop_info_tab entry-main-content">
                                        <div class="tab-pane fade show active" id="Description">
                                            <div class="">
                                                <p>
                                                    {{$product->description}}
                                                </p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row mt-60">
                                <div class="col-12">
                                    <h2 class="section-title style-1 mb-30">Related products</h2>
                                </div>
                                <div class="col-12">
                                    <div class="row related-products">
                                        @forelse ($products as $producted)
                                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                            <div class="product-cart-wrap hover-up">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="shop-product-right.html" tabindex="0">
                                                            <img class="default-img" src="{{asset($producted->image)}}" alt="">
                                                            <img class="hover-img" src="{{asset($producted->image)}}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-action-1">
                                                        <a aria-label="Compare" class="action-btn small hover-up" href="{{route('product', $producted->id)}}" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                                    </div>
                                                    <!-- <div class="product-badges product-badges-position product-badges-mrg">
                                                        <span class="hot">Hot</span>
                                                    </div> -->
                                                </div>
                                                <div class="product-content-wrap">
                                                    <h2><a href="{{route('product', $producted->id)}}" tabindex="0">{{$producted->name}}</a></h2>
                                                    <div class="rating-result" title="100%">
                                                        <span> </span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>{{$producted->salary}}</span>
                                                        <span class="old-price">{{$producted->discount}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @empty

                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-xl-5 primary-sidebar sticky-sidebar mt-30" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                        <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 997.094px;">
                            <div class="sidebar-widget widget-category-2 mb-30">
                                <h5 class="section-title style-1 mb-30 SendOrder">Send Order</h5>
                                <ul>
                                    <form id="contact-form" class="laravel-ajax-file-upload" action="{{route('wesite.touch')}}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <input type="hidden" name="product"  value="{{Crypt::encrypt($product->id)}}" readonly>
                                        @auth
                                        <input type="hidden" name="user"  value="{{Crypt::encrypt(Auth::user()->id)}}" readonly>
                                        @endauth
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input name="name" id="name" placeholder="Name *" maxlength="255" class="form-control" type="text" required>
                                                    <span class="input-focus-effect theme-bg"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input name="phone" id="phone" placeholder="phone *" maxlength="50" class="form-control" type="number" required>
                                                    <span class="input-focus-effect theme-bg"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input name="email" id="email" placeholder="Email *" maxlength="255" class="form-control" type="email" required>
                                                    <span class="input-focus-effect theme-bg"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="massage" id="massage" placeholder="Your message *" rows="3" class="form-control"></textarea>
                                                    <span class="input-focus-effect theme-bg"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="send">
                                                    <button class="m-btn m-btn-theme" type="submit" value="Send">send message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>

@endsection
@section('script')

@endsection
