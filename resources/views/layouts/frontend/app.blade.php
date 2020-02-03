<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- title -->
    <title>@yield('title', 'BIMSTEC')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1"/>
    <meta name="author" content="ss-tech">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('frontend/images/logo.png')}}">
    <!-- animation -->
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}"/>
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}"/>
    <!-- et line icon -->
    <link rel="stylesheet" href="{{asset('frontend/css/et-line-icons.css')}}"/>
    <!-- font-awesome icon -->
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}"/>
    <!-- themify icon -->
    <link rel="stylesheet" href="{{asset('frontend/css/themify-icons.css')}}">
    <!-- swiper carousel -->
    <link rel="stylesheet" href="{{asset('frontend/css/swiper.min.css')}}">
    <!-- justified gallery  -->
    <link rel="stylesheet" href="{{asset('frontend/css/justified-gallery.min.css')}}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}"/>
    <!-- Owl Carousel CSS-->
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <!-- bootsnav -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootsnav.css')}}">
    <!-- style -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}"/>
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}"/>
    <!--[if IE]>
    <script src="{{asset('frontend/js/html5shiv.js')}}"></script>
    <![endif]-->
    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
@stack('css')
    <!-- Styles -->
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

</head>
<body>
<div id="app">
<!-- start navigation -->
@include('layouts.frontend.navbar')
<!-- end navigation -->
    <div class="sidebar-wrapper mobile-height">
        @yield('content')
    </div>
</div>
<!-- start footer -->
@include('layouts.frontend.footer')
<!-- end footer -->
<!-- start scroll to top -->
<a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
<!-- end scroll to top  -->
<!-- javascript libraries -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/bootstrap.bundle.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/skrollr.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/smooth-scroll.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/jquery.appear.js')}}"></script>
<!-- menu navigation -->
<script type="text/javascript" src="{{asset('frontend/js/bootsnav.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/jquery.nav.js')}}"></script>
<!-- animation -->
<script type="text/javascript" src="{{asset('frontend/js/wow.min.js')}}"></script>
<!-- page scroll -->
<script type="text/javascript" src="{{asset('frontend/js/page-scroll.js')}}"></script>
<!-- swiper carousel -->
<script type="text/javascript" src="{{asset('frontend/js/swiper.min.js')}}"></script>
<!-- counter -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.count-to.js')}}"></script>
<!-- parallax -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.stellar.js')}}"></script>
<!-- magnific popup -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<!-- portfolio with shorting tab -->
<script type="text/javascript" src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script>
<!-- images loaded -->
<script type="text/javascript" src="{{asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
<!-- pull menu -->
<script type="text/javascript" src="{{asset('frontend/js/classie.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/hamburger-menu.js')}}"></script>
<!-- counter  -->
<script type="text/javascript" src="{{asset('frontend/js/counter.js')}}"></script>
<!-- fit video  -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.fitvids.js')}}"></script>
<!-- skill bars  -->
<script type="text/javascript" src="{{asset('frontend/js/skill.bars.jquery.js')}}"></script>
<!-- justified gallery  -->
<script type="text/javascript" src="{{asset('frontend/js/justified-gallery.min.js')}}"></script>
<!--pie chart-->
<script type="text/javascript" src="{{asset('frontend/js/jquery.easypiechart.min.js')}}"></script>
<!-- instagram -->
<script type="text/javascript" src="{{asset('frontend/js/instafeed.min.js')}}"></script>
<!-- retina -->
<script type="text/javascript" src="{{asset('frontend/js/retina.min.js')}}"></script>
<!-- Owl Carousel -->
<script type="application/javascript" src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.min.js"></script>
<!-- setting -->
<script type="text/javascript" src="{{asset('frontend/js/main.js')}}"></script>
@stack('js')
</body>
</html>

