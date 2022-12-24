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
                    <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                        <!--begin::Form-->
                        <form method="POST" action="{{ route('client.login') }}">
                            @csrf
                            <!--begin::Heading-->
                            <div class="text-center mb-10">
                                <!--begin::Title-->
                                <h1 class="text-dark mb-4">Sign In <u>Client</u> to {{$settings->title}}</h1>
                                <!--end::Title-->
                                <!--begin::Link-->
                                {{-- <div class="text-gray-400 fw-bold fs-4">New Here?
									<a href="sign-up.html" class="link-primary fw-bolder">Create an Account</a></div> --}}
                                <!--end::Link-->
                            </div>
                            <!--begin::Heading-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label for="email" class="form-label fs-6 fw-bolder text-dark">{{ __('Email Address') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input id="email" type="email" name="email" value="user@user.com" placeholder="Email" required autocomplete="email" autofocus class=" @error('email') is-invalid @enderror form-control form-control-lg form-control-solid " />
                                <!--end::Input-->
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack mb-2">
                                    <!--begin::Label-->
                                    <label for="currentPass" class="form-label fw-bolder text-dark fs-6 mb-0">{{ __('Password') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Link-->
                                    {{-- <a href="password-reset.html" class="link-primary fs-6 fw-bolder">Forgot Password ?</a> --}}
                                    <!--end::Link-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Input-->
                                <input id="password-field" type="password" name="password" required autocomplete="current-password" placeholder="password" value="seoera123" class=" @error('password') is-invalid @enderror form-control form-control-lg form-control-solid " autocomplete="off" />
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password showpassword"></span>

                                <!--end::Input-->
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="fv-row mb-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <!--begin::Submit button-->
                                <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                                    {{ __('Login') }}
                                </button>

                                <!--end::Submit button-->
                                <!--begin::Separator-->
                                {{-- <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div> --}}
                                <!--end::Separator-->
                                <!--begin::Google link-->
                                {{-- <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
									<img alt="Logo" src="../../../assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Continue with Google</a> --}}
                                <!--end::Google link-->
                                <!--begin::Google link-->
                                {{-- <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
									<img alt="Logo" src="../../../assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-3" />Continue with Facebook</a> --}}
                                <!--end::Google link-->
                                <!--begin::Google link-->
                                {{-- <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
									<img alt="Logo" src="../../../assets/media/svg/brand-logos/apple-black.svg" class="h-20px me-3" />Continue with Apple</a> --}}
                                <!--end::Google link-->
                            </div>
                            <!--end::Actions-->
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
                        <a href="{{route('client.register')}}" class="text-muted text-hover-primary px-2">{{__('register Client')}}</a>
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
