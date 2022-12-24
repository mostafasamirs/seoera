
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
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
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
                </div>
            </div>
        </div>
    </div>
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
