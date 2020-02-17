@extends('layouts.frontend.app')
@section('title', 'Home- Bay of Bengal Initiative for Multi-Sectoral Technical and Economic Cooperation')
@section('content')

    <style type="text/css">
        /*style.css 916 line*/
        .bg-light-gray {
            background: none;
            margin-top: -150px;
        }

        /*style.css 916 line*/
        .right-navigations {
            width: 200px;
        }

        .right-navigations li a {
            line-height: 20px !important;
            padding: 15px !important;
        }

        .tabs_countent {
            margin-left: 15px;
            padding: 20px !important;
        }
    </style>
    <!-- start page title section -->
    <section id="page_title" class="wow fadeIn cover-background background-position-center top-space"
             style="background-image:url('images/page-title-img.JPG');">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row align-items-center">
                <div
                    class="col-12 d-flex flex-column text-center justify-content-center page-title-large padding-30px-tb">
                    <!-- start page title -->
                    <h1 class="alt-font text-white font-weight-600 mb-0">Counter-Terrorism and Transnational Crime</h1>
                    <!-- start breadcrumb -->
                    <div class="breadcrumb">
                        <ul class="text-center text-white text-md-right">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Areas of Cooperation</a></li>
                            <li>Counter-Terrorism and Transnational Crime</li>
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
    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-12 tab-style3">
                    <!-- start tab navigation -->
                    <ul class="nav nav-tabs alt-font text-uppercase text-small text-center font-weight-600 justify-content-center">
                        @foreach($cttcs as $cttc)
                            <li class="nav-item"><a class="nav-link" href="{{'#tab_'.$cttc->id}}"
                                                    data-toggle="tab">{{$cttc->title}}</a></li>
                        @endforeach
                    </ul>
                    <!-- end tab navigation -->
                </div>
            </div>
            <div class="tab-content">
            @foreach($cttcs as $cttc)
                <!-- start tab content -->
                    <div class="tab-pane med-text fade in show" id="{{'tab_'.$cttc->id}}">
                        <div class="col-12 col-lg-12 col-md-12 wow fadeIn" data-wow-delay="0.6s"
                             style="padding-top: 5px;">
                            {!! $cttc->content !!}
                        </div>
                    </div>
                    <!-- end tab content -->
                @endforeach
            </div>
        </div>
    </section>
    <!-- end tab style 01 section -->

@endsection
