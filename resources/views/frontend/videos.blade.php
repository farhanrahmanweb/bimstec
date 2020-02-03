@extends('layouts.frontend.app')
@section('title', 'Home- Bay of Bengal Initiative for Multi-Sectoral Technical and Economic Cooperation')
@section('content')

    <!-- start page title section -->
    <section id="page_title" class="wow fadeIn cover-background background-position-center top-space" style="background-image:url({{asset('frontend/images/page-title-img.JPG')}});">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 d-flex flex-column text-center justify-content-center page-title-large padding-30px-tb">
                    <!-- start page title -->
                    <h1 class="alt-font text-white font-weight-600 mb-0">Videos</h1>
                    <!-- start breadcrumb -->
                    <div class="breadcrumb">
                        <ul class="text-center text-white text-md-right">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Videos</a></li>
                        </ul>
                    </div>
                    <!-- end breadcrumb -->
                    <!-- end page title -->
                </div>
            </div>
        </div>
    </section>

    <section class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
        <div class="container">
            <div class="row">
                @foreach($videos as $key=>$video)
                    <div class="col-sm-4 text-center d-flex align-items-center md-margin-50px-bottom sm-margin-30px-bottom wow fadeIn mb-3" style="visibility: visible; animation-name: fadeIn;">
                        <div class="overflow-hidden position-relative w-100">
                            <div class="opacity-medium bg-extra-dark-gray"></div>
                            <img src="//img.youtube.com/vi/{{$video->video_url}}/default.jpg" class="width-100" alt="" data-no-retina="">
                            <div class="absolute-middle-center text-center">
                                <p class="alt-font text-light-gray width-100">{{$video->title}}</p>
                                <a href="https://www.youtube.com/watch?v={{$video->video_url}}" class="popup-vimeo btn btn-medium btn-transparent-white text-medium btn-rounded">Play<i
                                        class="fab fa-youtube icon-very-small" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
