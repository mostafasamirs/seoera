    <!-- Quick view -->
    <header class="header-area header-style-1 header-height-2">
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="{{route('home')}}"><img src="{{asset($settings->logo)}}" /></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <div class="header-wrap">
                                <div class="logo logo-width-1">
                                    <a href="{{route('home')}}"><img src="{{asset($settings->logo)}}" /></a>
                                </div>
                            </div>

                            <div class="categories-dropdown-wrap categories-dropdown-active-large font-heading">
                                <div class="d-flex categori-dropdown-inner">
                                    <ul>
                                        <li>
                                            <a href="shop-grid-right.html"> <img src="{{asset('website')}}/assets/imgs/theme/icons/category-1.svg" alt="" />Milks and Dairies</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img src="{{asset('website')}}/assets/imgs/theme/icons/category-2.svg" alt="" />Clothing & beauty</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img src="{{asset('website')}}/assets/imgs/theme/icons/category-3.svg" alt="" />Pet Foods & Toy</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img src="{{asset('website')}}/assets/imgs/theme/icons/category-4.svg" alt="" />Baking material</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img src="{{asset('website')}}/assets/imgs/theme/icons/category-5.svg" alt="" />Fresh Fruit</a>
                                        </li>
                                    </ul>
                                    <ul class="end">
                                        <li>
                                            <a href="shop-grid-right.html"> <img src="{{asset('website')}}/assets/imgs/theme/icons/category-6.svg" alt="" />Wines & Drinks</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img src="{{asset('website')}}/assets/imgs/theme/icons/category-7.svg" alt="" />Fresh Seafood</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img src="{{asset('website')}}/assets/imgs/theme/icons/category-8.svg" alt="" />Fast food</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img src="{{asset('website')}}/assets/imgs/theme/icons/category-9.svg" alt="" />Vegetables</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img src="{{asset('website')}}/assets/imgs/theme/icons/category-10.svg" alt="" />Bread and Juice</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="more_slide_open" style="display: none">
                                    <div class="d-flex categori-dropdown-inner">
                                        <ul>
                                            <li>
                                                <a href="shop-grid-right.html"> <img src="{{asset('website')}}/assets/imgs/theme/icons/icon-1.svg" alt="" />Milks and Dairies</a>
                                            </li>
                                            <li>
                                                <a href="shop-grid-right.html"> <img src="{{asset('website')}}/assets/imgs/theme/icons/icon-2.svg" alt="" />Clothing & beauty</a>
                                            </li>
                                        </ul>
                                        <ul class="end">
                                            <li>
                                                <a href="shop-grid-right.html"> <img src="{{asset('website')}}/assets/imgs/theme/icons/icon-3.svg" alt="" />Wines & Drinks</a>
                                            </li>
                                            <li>
                                                <a href="shop-grid-right.html"> <img src="{{asset('website')}}/assets/imgs/theme/icons/icon-4.svg" alt="" />Fresh Seafood</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="more_categories"><span class="icon"></span> <span class="heading-sm-1">Show more...</span></div>
                            </div>
                        </div>

                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                            <nav>
                                <ul>

                                    <li>
                                        <a href="{{route('home')}}">home</a>
                                    </li>

                                    <li>
                                        <a href="{{route('products')}}">products</a>
                                    </li>
                                    @guest
                                    <li>
                                        <a href="{{route('login')}}">login admin</a>
                                    </li>
                                    <li>
                                        <a href="{{route('client.login')}}">login Client</a>
                                    </li>
                                    @endguest
                                    @auth
                                    <li>
                                        <a href="{{route('admin.home')}}">Dashboard</a>
                                    </li>
                                    @endauth



                                </ul>
                            </nav>
                        </div>

                    </div>

                    <div class="hotline d-none d-lg-flex">
                        <img src="{{asset('website')}}/assets/imgs/theme/icons/icon-headphone.svg" alt="hotline" />
                        <p class="phonenumber">01144999586<span></span></p>
                    </div>
                    <div class="header-action-icon-2 d-block d-lg-none">
                        <div class="burger-icon burger-icon-white">
                            <span class="burger-icon-top"></span>
                            <span class="burger-icon-mid"></span>
                            <span class="burger-icon-bottom"></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>

    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="{{route('home')}}"><img src="{{asset($settings->logo)}}" /></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">

                <div class="mobile-menu-wrap mobile-header-border">
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu font-heading">

                            <li class="menu-item-has-children">
                                <a href="{{route('home')}}">home</a>
                            </li>


                            <li class="menu-item-has-children">
                                <a href="{{route('products')}}">products</a>
                            </li>
                            @guest
                            <li class="menu-item-has-children">
                                <a href="{{route('login')}}">login admin</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{route('client.login')}}">login Client</a>
                            </li>

                            @endguest
                            @auth
                            <li class="menu-item-has-children">
                                <a href="{{route('admin.home')}}">Dashboard</a>
                            </li>
                            @endauth
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-social-icon mb-50">
                    <h6 class="mb-15">Follow Us</h6>
                    <a href="{{$settings->facebook}}"><img src="{{asset('website')}}/assets/imgs/theme/icons/icon-facebook-white.svg" alt="" /></a>
                </div>

                <div class="site-copyright">Copyright {{date('Y')}} © <strong class="text-brand"><a href="https://mostafasamir.com/" target="_blank" alt="Mostafa Samir">Made with Mostafa Samir</a></strong> . All rights reserved.</div>
            </div>
        </div>
    </div>
    <!--End header-->
