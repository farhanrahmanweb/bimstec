@extends('layouts.frontend.app')
@section('title', 'Home- Bay of Bengal Initiative for Multi-Sectoral Technical and Economic Cooperation')
@push('css')
    <style type="text/css">
        .menu_bar {
            padding-top: 50px;
        }

        .profile img {
            width: 645px !important;
            height: 350px;
            object-fit: cover;
        }

        .card-shadow {
            box-shadow: 0px 1px 15px #ccc;
            margin: 1%;
            border-radius: 10px;
            overflow: hidden;
            min-height: 28rem;
            max-height: 28rem;
        }

        .card-img-top {
            width: 100%;
            height: 16rem;
            object-fit: cover;
            object-position: center;
        }
    </style>
@endpush
@section('content')
    <!-- start page title section -->
    <section id="page_title" class="wow fadeIn cover-background background-position-center top-space"
             style="background-image:url({{asset('frontend/images/page-title-img.JPG')}});">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row align-items-center">
                <div
                    class="col-12 d-flex flex-column text-center justify-content-center page-title-large padding-30px-tb">
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
            <div class="row">
                <div class="col-12 tab-style3">
                    <!-- start tab navigation -->
                    <ul class="nav nav-tabs margin-50px-bottom sm-margin-30px-bottom text-uppercase alt-font text-small font-weight-600 justify-content-center flex-column flex-md-row">
                        <li class="nav-item"><a class="nav-link active" href="#tab_sec1" data-toggle="tab">Profile</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#tab_sec2" data-toggle="tab">Secretary General's
                                Page</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tab_sec3" data-toggle="tab">Statements</a></li>
                    </ul>
                    <!-- end tab navigation -->
                </div>
            </div>
            <div class="tab-content">
                <!-- start tab content -->
                <div class="tab-pane med-text fade in active show Profile" id="tab_sec1">
                    <div class="row align-items-center">
                        {!! $profile->get('content') !!}
                    </div>
                </div>
                <!-- end tab content -->
                <!-- start tab content -->
                <div class="tab-pane fade in" id="tab_sec2">
                    <div class="row align-items-center">
                        <div class="row">
                            @foreach($secretaryPages as $key=>$secretarypage)
                                <div class="col-md-3">
                                    <a href="{{route('secretary-page', $secretarypage->id)}}">
                                        <div class="card p-0 card-shadow">
                                            <img class="card-img-top"
                                                 src="{{asset('storage/secretary/'.$secretarypage->file)}}"
                                                 alt="Card image cap">
                                            <div class="card-body">
                                                <h6 class="card-title link">{{$secretarypage->title}}</h6>
                                                <p class="card-title">{{\Carbon\Carbon::parse($secretarypage->date, 'UTC')->isoFormat('Do MMM YYYY')}}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <!-- end tab content -->
                <!-- start tab content -->
                <div class="tab-pane fade in" id="tab_sec3">
                    <div class="container">
                        @foreach($statements as $key=>$statement)
                            <div class="row margin-10px-bottom">
                                <div class="col-12 col-md-2 md-margin-30px-bottom last-paragraph-no-margin">
                                    <div
                                        class="feature-content padding-10px-all bg-white box-shadow-light lg-padding-20px-all text-center">
                                        <div class="alt-font font-weight-600 text-extra-dark-gray"><span
                                                class="text-deep-pink margin-5px-right" style="font-size: 25px;">{{\Carbon\Carbon::parse($statement->date, 'UTC')->isoFormat('Do MMM')}} <br></span> {{\Carbon\Carbon::parse($statement->date, 'UTC')->isoFormat('YYYY')}}
                                        </div>
                                        {{--                                        <p>Danmodi, DHAKA</p>--}}
                                    </div>
                                </div>

                                <div class="col-12 col-lg-10 text-center text-lg-left wow fadeIn">
                                    <div
                                        class="feature-content padding-10px-all bg-white box-shadow-light lg-padding-20px-all download_tb px-4">
                                        <h2 class="text-large line-height-25 text-dark">{{$statement->title}}</h2>
                                        <a class="text-extra-small line-height-25 text-white btn btn-success"
                                           href="{{asset('storage/secretary/'.$statement->file)}}"
                                           target="_blank"><u>Download</u></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- end tab content -->
            </div>
        </div>
    </section>
    <!-- end tab style 01 section -->
@endsection



