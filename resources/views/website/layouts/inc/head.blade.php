<meta charset="utf-8" />
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
    <meta name="keywords" content="" />
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
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">

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
            font-family: 'Cairo', sans-serif!important;
        }

    </style>




    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/main48b2.css?v=4.0" />
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/style.css" />
