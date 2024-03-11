<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        li.page-item.active {
            margin-left: 0 !important;
            width: 49px !important;
            height: 49px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            border: 1px solid #191B1E !important;
            border-radius: 0 !important;
            font-size: 14px !important;
            font-weight: 700 !important;
            color: #191B1E !important;
        }

        .page-item.active .page-link {
            z-index: 3;
            color: #191B1E !important;
            background: transparent !important;
            border-color: transparent !important;
        }

        .page-item.active .page-link::after {
            content: "" !important;
            position: absolute !important;
            left: 0 !important;
            bottom: 0 !important;
            width: 0 !important;
            height: 4px !important;
            background: #191B1E !important;
            -webkit-transition: all 0.4s ease-out 0s !important;
            -moz-transition: all 0.4s ease-out 0s !important;
            -ms-transition: all 0.4s ease-out 0s !important;
            -o-transition: all 0.4s ease-out 0s !important;
            transition: all 0.4s ease-out 0s;
        }
    </style>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/slick.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/default.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/responsive.css">
</head>

<body>

    <!-- preloader-start -->
    <div id="preloader">
        <div class="rasalina-spin-box"></div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    @include('frontend.layouts.inc.header')
    <!-- header-area-end -->

    <!-- main-area -->
    @yield('main')
    <!-- main-area-end -->


    <!-- Footer-area -->
    @include('frontend.layouts.inc.footer')
    <!-- Footer-area-end -->

    <!-- JS here -->
    <script src="{{ asset('frontend') }}/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/element-in-view.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/slick.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/ajax-form.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/wow.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>
</body>

</html>
