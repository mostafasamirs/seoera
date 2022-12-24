<!DOCTYPE html>
<html lang="ar" dir="rtl" class="rtl">
<!-- <html lang="en"> -->

<head>
    @include('website.layouts.inc.head')
</head>

<body>
    <!-- Modal -->

    @include('website.layouts.inc.header')
    <!--End header-->

    @yield('content')


    @include('website.layouts.inc.footer')

    @include('website.layouts.inc.script')

</body>


</html>
