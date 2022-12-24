


<!DOCTYPE html>
<html lang="en">
@php
$settings = App\Models\Setting::first();
@endphp

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
    <meta property="og:title" content="alharamain" />
    <title>alharamain</title>
    <meta property="og:site_name" content="alharamain" />
    <meta name="author" content="alharamain">
    <meta property="og:title" content="alharamain">
    <meta property="og:site_name" content="alharamain">
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
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- ”robots” --}}
    <link href="{{$settings->link}}" rel="canonical">
    <meta property="og:url" content="{{$settings->link}}">
    <meta name=”robots” content="index, follow">
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
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    @if (Lang::locale() == 'en')
    <link href="{{asset('dashboard')}}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboard')}}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboard')}}/styleadmin/style_en.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboard')}}/styleadmin/all.min.css" rel="stylesheet" type="text/css" />

    <!--end::Global Stylesheets Bundle-->
    @else
    <link href="{{asset('dashboard')}}/assets/plugins/global/plugins.bundle.rtl.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboard')}}/assets/css/style.bundle.rtl.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">
    <link href="{{asset('dashboard')}}/styleadmin/style_ar.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboard')}}/styleadmin/all.min.css" rel="stylesheet" type="text/css" />

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

</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="bg-body">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">

            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <!--begin::Wrapper-->
                    <div class="text-center mb-10">
                                <!--begin::Title-->
                                <h1 class="text-dark mb-4">Register <u>Client</u> to {{$settings->title}}</h1>
                                <!--end::Title-->
                                <!--begin::Link-->
                            </div>
                    <div class="w-lg-500px p-10 p-lg-1 mx-auto">
                        <!--begin::Form-->
                        <form method="POST" action="{{ route('client.register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
                    <!--begin::Links-->
                    <div class="d-flex flex-center fw-bold fs-6">
                        <a href="{{route('home')}}" class="text-muted text-hover-primary px-2">{{__('Home')}}</a>
                        <a href="{{route('client.login')}}" class="text-muted text-hover-primary px-2">{{__('Login Client')}}</a>
                    </div>
                    <!--end::Links-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Body-->

            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative" style="background-color: #1a1a27!important">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                    <!--begin::Content-->
                    <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
                        <br>
                        <br>
                        <h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: white!important;">Welcome to {{$settings->title}}</h1>

                        <!--begin::Logo-->

                        @if ($settings->logo !=null)
                        <a href="#" class="py-9 mb-5">
                            <img alt="Logo" src="{{asset($settings->logo)}}" class="h-95px" style="transform: scale(2.8)!important;" />
                        </a>
                        @else
                        <a href="#" class="py-9 mb-5">
                            <img alt="Logo" src="{{asset('website')}}/images/logo.png" class="h-95px" style="transform: scale(8.2)!important;" />
                        </a>
                        @endif

                        <!--end::Logo-->
                        <!--begin::Title-->
                        <!--end::Title-->
                        <!--begin::Description-->
                        {{-- <p class="fw-bold fs-2" style="color: #ebc543;">Discover Amazing Metronic
							<br />with great build tools</p> --}}
                        <!--end::Description-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Illustration-->
                    <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(/metronic8/demo1/assets/media/illustrations/sketchy-1/13.png"></div>
                    <!--end::Illustration-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Aside-->

        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Main-->

    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{asset('dashboard')}}/scriptdmin/jquery-3.6.0.min.js"></script>
    <script src="{{asset('dashboard')}}/assets/plugins/global/plugins.bundle.js"></script>
    <script src="{{asset('dashboard')}}/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{asset('dashboard')}}/assets/js/custom/authentication/sign-in/general.js"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
    <!--Begin::Google Tag Manager (noscript) -->
    <!--End::Google Tag Manager (noscript) -->
    <script src="{{asset('dashboard')}}/scriptdmin/main.js"></script>


</body>
<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/metronic8/demo1/authentication/flows/aside/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Nov 2021 10:08:59 GMT -->

</html>
