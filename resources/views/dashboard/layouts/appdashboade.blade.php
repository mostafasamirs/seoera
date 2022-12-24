<!DOCTYPE html>

@if (Lang::locale() == 'en')
<html lang="en">
@else
<html lang="ar" dir="rtl" direction="rtl" style="direction:rtl;">
@endif
<!--begin::Head-->
<!-- Added by HTTrack -->
<!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    {{-- title --}}
    @if ($settings->title != null)
    <title>{{$settings->title}}</title>
    <meta property="og:title" content="{{$settings->title}}" />
    <meta property="og:site_name" content="{{$settings->title}}" />
    <meta name="author" content="{{$settings->title}}">
    <meta property="og:title" content="{{$settings->title}}">
    <meta property="og:site_name" content="{{$settings->title}}">
    @else
    <meta property="og:title" content="seoEra" />
    <title>seoEra</title>
    <meta property="og:site_name" content="seoEra" />
    <meta name="author" content="seoEra">
    <meta property="og:title" content="seoEra">
    <meta property="og:site_name" content="seoEra">
    @endif
    {{-- title --}}
    {{-- description --}}
    @if ($settings->description != null)
    <meta name="description" content="{{$settings->description }}" />
    <meta property="og:description" content="{{$settings->description }}">
    @else
    <meta name="description" content="" />
    <meta property="og:description" content="">
    @endif
    {{-- description --}}
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="الغوص للاطفال , ملابس الغوص للرجال,تعليم العوم في البحر,تعليم العوم في البحر,تعليم الغطس تحت الماء,الغطس ,تحت الماء, شرم الشيخ,الغردقة,ملابس غطس,غطس,كورسات غطس,كورس تعليم السباحة,تحت الماء" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- ”robots” --}}
    <meta name=”robots” content="index, follow">
    <link href="#" rel="canonical">
    <meta property="og:url" content="#">
    <meta property="og:type" content="article">
    {{-- ”robots”--}}



    {{-- link style --}}
    <link rel="canonical" href="" />
    @if ($settings->icon != null)
    <link rel="shortcut icon" href="{{asset($settings->icon)}}" />
    @else
    <link rel="shortcut icon" href="{{asset('images')}}/favicon.ico" />
    @endif

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    @if (Lang::locale() == 'en')
    <link href="{{asset('dashboard')}}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <link href="{{asset('dashboard')}}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboard')}}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <!--Begin::Google Tag Manager -->
    {{-- link style  seoEra--}}

    {{-- select2 --}}
    <link href="{{asset('dashboard')}}/styleadmin/select2.min.css" rel="stylesheet" type="text/css" />
    {{-- select2 --}}
    {{-- sweetalert2 --}}
    <link rel="stylesheet" href="{{asset('dashboard')}}/styleadmin/sweetalert.min.css">
    {{-- sweetalert2 --}}
    <link rel="stylesheet" href="{{asset('dashboard')}}/styleadmin/magnific.min.css">

    <link href="{{asset('dashboard')}}/styleadmin/style_en.css" rel="stylesheet" type="text/css" />
    {{-- link style  seoEra--}}
    @else
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet"> --}}
    <link href="{{asset('dashboard')}}/styleadmin/all.min.css" rel="stylesheet" type="text/css" />

    <link href="{{asset('dashboard')}}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboard')}}/assets/plugins/global/plugins.bundle.rtl.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboard')}}/assets/css/style.bundle.rtl.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">
    {{-- link style  seoEra--}}
    {{-- select2 --}}
    <link href="{{asset('dashboard')}}/styleadmin/select2.min.css" rel="stylesheet" type="text/css" />
    {{-- select2 --}}

    {{-- sweetalert2 --}}
    <link rel="stylesheet" href="{{asset('dashboard')}}/styleadmin/magnific.min.css">
    <link rel="stylesheet" href="{{asset('dashboard')}}/styleadmin/sweetalert.min.css">
    {{-- sweetalert2 --}}

    <link href="{{asset('dashboard')}}/styleadmin/style_ar.css" rel="stylesheet" type="text/css" />
    {{-- link style  seoEra--}}

    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span {
            font-family: 'Cairo', sans-serif !important;
        }

    </style>
    @endif

    <!--End::Google Tag Manager -->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">

    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            @include('dashboard.layouts.inc.slider')
            <!--end::Aside-->
            {{-- --}}
            @include('sweetalert::alert')
            {{-- --}}
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" style="" class="header align-items-stretch">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex align-items-stretch justify-content-between">
                        <!--begin::Aside mobile toggle-->
                        <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
                            <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                <span class="svg-icon svg-icon-2x mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                                        <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Aside mobile toggle-->
                        <!--begin::Mobile logo-->
                        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 styllogozindex">
                            <a href="{{route('admin.home')}}" class="d-lg-none">
                                @if ($settings->logo !=null)


                                <img alt="Logo" src="{{asset($settings->logo )}}" class="h-30px logo styleinglogos" />

                                @else
                                <img alt="Logo" src="{{asset('images')}}/logo.png" class="h-30px logo styleinglogos" />

                                @endif

                                {{-- <img alt="Logo" src="{{asset('dashboard')}}/assets/media/logos/logo-2.svg" class="h-30px" /> --}}
                            </a>
                        </div>
                        <!--end::Mobile logo-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                            <!--begin::Navbar-->
                            <div class="d-flex align-items-stretch" id="kt_header_nav">
                                <!--begin::Menu wrapper-->
                                <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                                    <!--begin::Menu-->
                                    <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch styleResources" id="#kt_header_menu" data-kt-menu="true">
                                        <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" class="menu-item menu-lg-down-accordion me-lg-1">
                                            <span class="menu-link py-3">
                                                <span class="menu-title">{{__('Quick Options')}}</span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </span>
                                            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px ">
                                                <div class="menu-item">
                                                    <a class="menu-link py-3" href="{{route('clear_cache')}}" title="{{__('Delete the cache')}}" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                                        <span class="menu-icon">
                                                            <!--begin::Svg Icon | path: /icons/duotune/general/gen002.svg-->
                                                            <span class="svg-icon svg-icon-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3" d="M4.05424 15.1982C8.34524 7.76818 13.5782 3.26318 20.9282 2.01418C21.0729 1.98837 21.2216 1.99789 21.3618 2.04193C21.502 2.08597 21.6294 2.16323 21.7333 2.26712C21.8372 2.37101 21.9144 2.49846 21.9585 2.63863C22.0025 2.7788 22.012 2.92754 21.9862 3.07218C20.7372 10.4222 16.2322 15.6552 8.80224 19.9462L4.05424 15.1982ZM3.81924 17.3372L2.63324 20.4482C2.58427 20.5765 2.5735 20.7163 2.6022 20.8507C2.63091 20.9851 2.69788 21.1082 2.79503 21.2054C2.89218 21.3025 3.01536 21.3695 3.14972 21.3982C3.28408 21.4269 3.42387 21.4161 3.55224 21.3672L6.66524 20.1802L3.81924 17.3372ZM16.5002 5.99818C16.2036 5.99818 15.9136 6.08615 15.6669 6.25097C15.4202 6.41579 15.228 6.65006 15.1144 6.92415C15.0009 7.19824 14.9712 7.49984 15.0291 7.79081C15.0869 8.08178 15.2298 8.34906 15.4396 8.55884C15.6494 8.76862 15.9166 8.91148 16.2076 8.96935C16.4986 9.02723 16.8002 8.99753 17.0743 8.884C17.3484 8.77046 17.5826 8.5782 17.7474 8.33153C17.9123 8.08486 18.0002 7.79485 18.0002 7.49818C18.0002 7.10035 17.8422 6.71882 17.5609 6.43752C17.2796 6.15621 16.8981 5.99818 16.5002 5.99818Z" fill="black" />
                                                                    <path d="M4.05423 15.1982L2.24723 13.3912C2.15505 13.299 2.08547 13.1867 2.04395 13.0632C2.00243 12.9396 1.9901 12.8081 2.00793 12.679C2.02575 12.5498 2.07325 12.4266 2.14669 12.3189C2.22013 12.2112 2.31752 12.1219 2.43123 12.0582L9.15323 8.28918C7.17353 10.3717 5.4607 12.6926 4.05423 15.1982ZM8.80023 19.9442L10.6072 21.7512C10.6994 21.8434 10.8117 21.9129 10.9352 21.9545C11.0588 21.996 11.1903 22.0083 11.3195 21.9905C11.4486 21.9727 11.5718 21.9252 11.6795 21.8517C11.7872 21.7783 11.8765 21.6809 11.9402 21.5672L15.7092 14.8442C13.6269 16.8245 11.3061 18.5377 8.80023 19.9442ZM7.04023 18.1832L12.5832 12.6402C12.7381 12.4759 12.8228 12.2577 12.8195 12.032C12.8161 11.8063 12.725 11.5907 12.5653 11.4311C12.4057 11.2714 12.1901 11.1803 11.9644 11.1769C11.7387 11.1736 11.5205 11.2583 11.3562 11.4132L5.81323 16.9562L7.04023 18.1832Z" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <span class="menu-title">{{__('speeded up')}}</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3" href="{{route('home')}}" title="{{__('Go To the website')}}" data-bs-toggle="tooltip" data-bs-trigger="hover" target="_blank" data-bs-dismiss="click" data-bs-placement="right">
                                                        <span class="menu-icon">
                                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                            <span class="svg-icon svg-icon-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
                                                                    <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <span class="menu-title">{{__('Web Site')}}</span>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Navbar-->
                            <!--begin::Topbar-->
                            <div class="d-flex align-items-stretch flex-shrink-0">
                                <!--begin::Toolbar wrapper-->
                                <div class="d-flex align-items-stretch flex-shrink-0">
                                    <!--begin::Search-->

                                    <!--end::Search-->
                                    <!--begin::Activities-->
                                    <!--end::Activities-->
                                    <!--begin::Notifications-->
                                    <div class="d-flex align-items-center ms-1 ms-lg-3">

                                        <i class="fas fa-expand fullscren" id="btnFullscreen" style="color:#adb5bd ;font-size: 21px; transform: translate(2px, 1px); list-style:none;cursor: pointer; "></i>
                                    </div>
                                    <!--begin::Notifications-->
                                    <div class="d-flex align-items-center ms-1 ms-lg-3">
                                        <!--begin::Menu- wrapper-->
                                        {{-- <div class="btn btn-icon btn-active-light-primary position-relative w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end"> --}}
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                                        {{-- <span class="countnotifactions">
                                                {{ auth()->user()->unreadNotifications->count() }}
                                        </span> --}}
                                        {{-- <i class="fas fa-bell fa-sm" style="font-size: 18px!important"></i> --}}
                                        {{-- <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z" fill="black" />
                                                    <path d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z" fill="black" />
                                                    <path opacity="0.3" d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z" fill="black" />
                                                    <path opacity="0.3" d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z" fill="black" />
                                                </svg>
                                            </span> --}}
                                        <!--end::Svg Icon-->
                                        {{-- </div> --}}
                                        <!--begin::Menu-->
                                        {{-- scripts in laravel   --}}
                                        {{-- scripts in laravel   --}}
                                        <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px md-w-100" data-kt-menu="true">
                                            <!--begin::Heading-->
                                            <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('{{asset('dashboard')}}/assets/media/misc/pattern-1.jpg')">
                                                <!--begin::Title-->
                                                <h3 class="text-white fw-bold px-9 mt-10 mb-6">{{__('Notifications')}}
                                                    {{-- <span class="fs-8 opacity-75 ps-3">{{__('24 hours reports')}}</span> --}}
                                                    <span class="fs-8 opacity-75 ps-3">
                                                        {{-- <a href="{{Route('MarkAsRead_all')}}" class="small" style="color: seashell!important">{{__('Make As Read All')}}</a> --}}
                                                    </span>
                                                </h3>
                                                <!--end::Title-->
                                                <!--begin::Tabs-->
                                                <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
                                                    <li class="nav-item">
                                                        <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_3">{{__('Reports')}} ({{ auth()->user()->unreadNotifications->count() }}) </a>
                                                    </li>

                                                </ul>
                                                <!--end::Tabs-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Tab content-->
                                            <div class="tab-content">

                                                <!--begin::Tab panel-->
                                                <div class="tab-pane fade show active" id="kt_topbar_notifications_3" role="tabpanel">
                                                    <!--begin::Items-->
                                                    <div class="scroll-y mh-325px my-5 px-8">
                                                        @foreach(auth()->user()->unreadNotifications as $notification)
                                                        <!--begin::Item-->
                                                        <div class="d-flex flex-stack py-4">
                                                            <!--begin::Section-->
                                                            <div class="d-flex align-items-center me-2">
                                                                <!--begin::Code-->
                                                                <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                                <!--end::Code-->
                                                                <!--begin::Title-->
                                                                <a href="{{ Route('admin.home') }}" class="text-gray-800 text-hover-primary fw-bold">
                                                                    {{ $notification->data['title'] }}
                                                                    <br>
                                                                    {{ $notification->data['user'] }}

                                                                </a>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Section-->
                                                            <!--begin::Label-->
                                                            <span class="badge badge-light fs-8">{{ $notification->created_at }}</span>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Item-->
                                                        @endforeach

                                                    </div>
                                                    <!--end::Items-->
                                                    <!--begin::View more-->
                                                    {{-- <div class="py-3 text-center border-top">
                                    <a href="pages/profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
                                            <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                </div> --}}
                                                    <!--end::View more-->
                                                </div>
                                                <!--end::Tab panel-->
                                            </div>
                                            <!--end::Tab content-->
                                        </div>
                                        <!--end::Menu-->
                                        <!--end::Menu wrapper-->
                                    </div>
                                    <!--end::Notifications-->
                                    <!--end::Notifications-->

                                    <!--begin::Quick links-->
                                    <!--end::Quick links-->
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                                        <!--begin::Menu wrapper-->
                                        <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                            {{-- image user --}}
                                            @if (auth()->user()->image !=null)
                                            <img src="{{asset(auth()->user()->image)}}" alt="" loading="lazy" />
                                            @else
                                            <img src="{{asset('images')}}/adminimage.png" alt="user" loading="lazy" />
                                            @endif

                                        </div>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-300px" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content d-flex align-items-center px-3">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-50px me-5">
                                                        {{-- image user --}}
                                                        @if (auth()->user()->image !=null)
                                                        <img src="{{asset(auth()->user()->image)}}" alt="" loading="lazy" />
                                                        @else
                                                        <img src="{{asset('images')}}/adminimage.png" alt="user" loading="lazy" />
                                                        @endif
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Username-->
                                                    <div class="d-flex flex-column">
                                                        <div class="fw-bolder d-flex align-items-center fs-5">
                                                            {{auth()->user()->name}}

                                                            <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2"></span></div>
                                                        <a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{auth()->user()->email}}</a>
                                                    </div>
                                                    <!--end::Username-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                {{--Profile users--}}
                                                <a href="{{route('profileuser',auth()->user()->id)}}" class="menu-link px-5">{{__('My Profile & Account Settings')}}</a>
                                                {{--Profile users--}}

                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                                <a href="#" class="menu-link px-5">
                                                    <span class="menu-title position-relative">{{__('Language')}}
                                                        @if(Lang::locale() == 'en')
                                                        <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">{{__('English')}}
                                                            <img class="w-15px h-15px rounded-1 ms-2" src="{{asset('dashboard')}}/assets/media/flags/united-states.svg" alt="" />
                                                        </span>
                                                        @else
                                                        <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">{{__('Arabic')}}
                                                            <img class="w-15px h-15px rounded-1 ms-2" src="{{asset('dashboard')}}/assets/media/flags/eg.jpg" alt="" />
                                                        </span>
                                                        @endif
                                                    </span>
                                                </a>
                                                <!--begin::Menu sub-->
                                                <!--begin::Menu item-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        @if(Lang::locale() == 'en')
                                                        {{-- <a href="{{route('admin.lang','en')}}" class="menu-link d-flex px-5 active">
                                                        <span class="symbol symbol-20px me-4">
                                                            <img class="rounded-1" src="{{asset('dashboard')}}/assets/media/flags/united-states.svg" alt="" />
                                                        </span>
                                                        {{__('English')}}
                                                        </a> --}}
                                                        <a href="{{route('admin.lang','ar')}}" class="menu-link d-flex px-5 active">
                                                            <span class="symbol symbol-20px me-4">
                                                                <img class="rounded-1" src="{{asset('dashboard')}}/assets/media/flags/eg.jpg" alt="" />
                                                            </span>
                                                            {{__('Arabic')}}
                                                        </a>

                                                        @else

                                                        {{-- <a href="{{route('admin.lang','ar')}}" class="menu-link d-flex px-5 active">
                                                        <span class="symbol symbol-20px me-4">
                                                            <img class="rounded-1" src="{{asset('dashboard')}}/assets/media/flags/united-states.svg" alt="" />
                                                        </span>
                                                        {{__('English')}}
                                                        </a> --}}
                                                        <a href="{{route('admin.lang','en')}}" class="menu-link d-flex px-5 active">
                                                            <span class="symbol symbol-20px me-4">
                                                                <img class="rounded-1" src="{{asset('dashboard')}}/assets/media/flags/united-states.svg" alt="" />
                                                            </span>
                                                            {{__('English')}}
                                                        </a>
                                                        @endif
                                                    </div>                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="javascript:void(0);" onclick="event.preventDefault();
                                                document.getElementById('admin-logout-form').submit();" class="menu-link px-5">
                                                    {{-- <i class="mdi mdi-logout-variant"></i> --}}
                                                    <span>{{ __('Log Out') }}</span>
                                                </a>
                                                <form id="admin-logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>

                                                {{-- <a href="authentication/flows/basic/sign-in.html" class="menu-link px-5">Sign Out</a> --}}
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                        <!--end::Menu wrapper-->
                                    </div>
                                    <!--end::User -->
                                    <!--begin::Heaeder menu toggle-->
                                    <div class="d-flex align-items-center d-lg-none ms-2 me-n3" title="Show header menu">
                                        <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
                                            <!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="black" />
                                                    <path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                    </div>
                                    <!--end::Heaeder menu toggle-->
                                </div>
                                <!--end::Toolbar wrapper-->
                            </div>
                            <!--end::Topbar-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                @yield('content')



                <!--begin::Footer-->
                @include('dashboard.layouts.inc.footer')
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>

    @yield('script')

    <script>
        var hostUrl = "#";

    </script>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{asset('dashboard')}}/scriptdmin/jquery-3.6.0.min.js"></script>

    <script src="{{asset('dashboard')}}/assets/plugins/global/plugins.bundle.js"></script>
    <script src="{{asset('dashboard')}}/assets/js/scripts.bundle.js"></script>

    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{asset('dashboard')}}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{asset('dashboard')}}/assets/js/custom/widgets.js"></script>
    <script src="{{asset('dashboard')}}/assets/js/custom/apps/chat/chat.js"></script>
    {{-- <script src="{{asset('dashboard')}}/assets/js/custom/modals/create-app.js"></script> --}}
    <script src="{{asset('dashboard')}}/assets/js/custom/modals/upgrade-plan.js"></script>
    <script src="{{asset('dashboard')}}/assets/js/custom/intro.js"></script>

    {{-- script seoEra--}}
    {{-- select2 --}}
    <script src="{{asset('dashboard')}}/scriptdmin/select2.min.js"></script>
    {{-- select2 --}}
    {{-- sweetalert2 --}}
    <script src="{{asset('dashboard')}}/scriptdmin/sweetalert2.all.min.js"></script>
    <script src="{{asset('dashboard')}}/scriptdmin/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    {{-- ckeditor5 --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/translations/de.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
    {{-- ckeditor5 --}}

    <script src="{{asset('dashboard')}}/scriptdmin/simpleParallax.min.js"></script>
    <script src="{{asset('dashboard')}}/scriptdmin/magnific.min.js"></script>
    <script src="{{asset('dashboard')}}/scriptdmin/main.js"></script>
    @include('dashboard.layouts.inc.tinyeditor')




    @if (Lang::locale() == 'en')
    <script>
        //end select2
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: 'Delete The Data'
                    , text: 'Are You Sure To Delete The Data?'
                    , type: "error"
                    , icon: "error"
                    , buttons: true
                    , dangerMode: true
                    , reverseButtons: true
                    , timerProgressBar: true
                    , closeModal: true
                    , showCancelButton: true
                    , closeOnConfirm: true
                    , timer: 30000
                    , showCancelButton: true
                    , showCloseButton: true
                    , confirmButtonText: "No, cancel it !"
                    , cancelButtonText: " Yes, I am sure !"
                    , buttons: [
                        'No, cancel it !'
                        , 'Yes, I am sure !'
                    ],


                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
        //end sweetalert

    </script>
    @else
    <script>
        //end select2
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: 'حذف البيانات'
                    , text: 'هل أنت متأكد من حذف هذه البيانات'
                    , type: "error"
                    , icon: "error"
                    , buttons: true
                    , dangerMode: true
                    , reverseButtons: true
                    , timerProgressBar: true
                    , closeModal: true
                    , closeOnConfirm: true
                    , timer: 30000
                    , showCancelButton: true
                    , showCloseButton: true
                    , cancelButtonText: "لأ"
                    , confirmButtonText: "نعم"
                    , buttons: [
                        'لأ'
                        , 'نعم انا متأكد'
                    ],

                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
        //end sweetalert

    </script>
    @endif
    {{-- sweetalert2 --}}



    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
    <!--Begin::Google Tag Manager (noscript) -->

    <script src="{{asset('dashboard')}}/scriptdmin/repeater.js"></script>

    <!--End::Google Tag Manager (noscript) -->
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script'
            , 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1618515688493799');
        fbq('track', 'PageView');

    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1618515688493799&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <script type="application/ld+json">
        {
            "@context": "https://schema.org"
            , "@type": "Article"
            , "mainEntityOfPage": {
                "@type": "WebPage"
                , "@id": "https://seoEra.com/"
            }
            , "headline": "seoEra"
            , "image": ""
            , "author": {
                "@type": "Person"
                , "name": "seoEra"
            }
            , "publisher": {
                "@type": "Organization"
                , "name": "seoEra"
                , "logo": {
                    "@type": "ImageObject"
                    , "url": "https://seoEra.com/"
                }
            }
            , "datePublished": "2022-02-28"
        }

    </script>


    <script type="text/javascript">
        function CheckAll(className, elem) {
            var elements = document.getElementsByClassName(className);
            var l = elements.length;

            if (elem.checked) {
                for (var i = 0; i < l; i++) {
                    elements[i].checked = true;
                }
            } else {
                for (var i = 0; i < l; i++) {
                    elements[i].checked = false;
                }
            }
        }

        $.noConflict();
        jQuery.noConflict();

        $(function() {
            $("#btn_delete_all").click(function() {
                var selected = new Array();

                $("#myTable input[type=checkbox]:checked").each(function() {
                    if (this.value != "on") {
                        selected.push(this.value);
                    }
                });
                console.log(selected);
                if (selected.length > 0) {
                    $('#delete_all').modal("show")
                    $('input[id="delete_all_id"]').val(selected);
                }
            });
        });

    </script>

    <script>
        $(document).ready(function() {
            $('.selectd').select2();
        });
        $(document).ready(function() {
            $(".selectded").select2();
        });
        $(document).ready(function() {
            $(".selectdeds").select2();
        });

    </script>

    {{-- <script>
  var myModal = new bootstrap.Modal(document.getElementById('ModalID'))
  myModal.show()
</script> --}}


    @yield('keyupjs')


</body>
<!--end::Body-->

</html>
