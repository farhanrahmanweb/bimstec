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
                    <h1 class="alt-font text-white font-weight-600 mb-0">General Secretary</h1>
                    <!-- start breadcrumb -->
                    <div class="breadcrumb">
                        <ul class="text-center text-white text-md-right">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li>General Secretary</li>
                        </ul>
                    </div>
                    <!-- end breadcrumb -->
                    <!-- end page title -->
                </div>
            </div>
        </div>
    </section>
    <!-- end page title section -->
    <!-- start tab style 01 section -->
    <section class="wow fadeIn menu_bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-12 sm-margin-30px-bottom margin-70px-top">
                    <h5 class="alt-font font-weight-700 text-extra-dark-gray margin-15px-bottom text-uppercase text-center">{{$singlepage->title}}</h5>
                </div>
                <div class="col-12 col-md-12 sm-margin-30px-bottom margin-45px-bottom margin-30px-top">
                    <img src="{{asset('storage/secretary/'.$singlepage->file)}}" alt="" class="w-100"/>
                </div>
                <div class="col-12 col-md-2">
                    <div class="feature-content text-left">
                        <div class="alt-font font-weight-500 text-extra-dark-gray text_icon"><i class="far fa-calendar-alt margin-10px-right"></i>{{\Carbon\Carbon::parse($singlepage->date, 'UTC')->isoFormat('Do MMM YYYY')}}</div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-md-12 text-left margin-30px-top">
                    <p>{{$singlepage->description}}</p>

                </div>
            </div>
        </div>
    </section>
    <!-- end tab style 01 section -->
@endsection




