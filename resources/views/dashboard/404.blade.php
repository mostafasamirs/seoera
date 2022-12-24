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
    @if ($settings->title != null)
    <title>{{$settings->title}}</title>
    @else

    <title>seoEra</title>
    @endif
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />


    @if ($settings->description != null)
    <meta name="description" content="{{$settings->description }}" />
    @else
    <meta name="description" content="WE ARE A MULTI-DISCIPLINE FIRM FOCUSES ON PROVIDING A FULL DESIGN & BUILD SERVICES IN BOTH INTERIORS & CONTRACTING FIELDS, SINCE OUR ESTABLISHMENT IN 2014 WE WERE KEEN TO DELIVER A NEW STANDARD OF INTERIOR DESIGN IN EGYPT ALWAYS IN LINE WITH THE INTERNATIONAL TRENDS" />
    @endif



    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- link style --}}
    <link rel="canonical" href="" />
    @if ($settings->icon != null)
    <link rel="shortcut icon" href="{{asset($settings->icon)}}" />
    @else

    <link rel="shortcut icon" href="{{asset('images')}}/logo/favicon.ico"/>
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

    {{-- <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime()
                , event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0]
                , j = d.createElement(s)
                , dl = l != 'dataLayer' ? '&amp;l=' + l : '';
            j.async = true;
            j.src = '../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
    </script> --}}
    <!--End::Google Tag Manager -->
</head>
<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-body" style="background-color: #35353a!important">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - 404 Page-->
			<div class="d-flex flex-column flex-center flex-column-fluid p-10">
				<!--begin::Illustration-->
                @if ($settings->logo)
				<img src="{{asset($settings->logo)}}" alt="" class="mw-100 mb-10 h-lg-350px" />
                @else

				<img src="{{asset('images')}}/logo/logo.png" alt="" class="mw-100 mb-10 h-lg-350px" />
                @endif
				<!--end::Illustration-->
				<!--begin::Message-->
				<h1 class="fw-bold mb-10" style="color: #F9BF26"> 😓 Seems there is nothing here </h1>
				<h1 class="fw-bold mb-10" style="color: #F9BF26">😎 Don't worry </h1>
				<!--end::Message-->
				<!--begin::Link-->
				<a href="{{route('home')}}" class="btn btn-warning" style="background-color: #F9BF26!important; color: #35353a!important;font-weight: 900;font-size: 16px;">Return Home</a>
				<!--end::Link-->
			</div>
			<!--end::Authentication - 404 Page-->
		</div>

		<!--end::Main-->
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
        <script src="{{asset('dashboard')}}/assets/plugins/global/plugins.bundle.js"></script>
        <script src="{{asset('dashboard')}}/assets/js/scripts.bundle.js"></script>
            <!--end::Global Javascript Bundle-->
		<!--end::Javascript-->
		<!--Begin::Google Tag Manager (noscript) -->
		<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>
		<!--End::Google Tag Manager (noscript) -->
	</body>
	<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/metronic8/demo1/rtl/authentication/general/error-404.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Nov 2021 10:23:06 GMT -->
</html>
