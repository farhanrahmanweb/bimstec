@extends('layouts.frontend.app')
@section('title', 'Home- Bay of Bengal Initiative for Multi-Sectoral Technical and Economic Cooperation')
@section('content')
    <!-- start page title section -->
    <section id="page_title" class="wow fadeIn cover-background background-position-center top-space"
             style="background-image:url({{asset('frontend/images/about-banner.jpg')}});">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row align-items-center">
                <div
                    class="col-12 d-flex flex-column text-center justify-content-center page-title-large padding-30px-tb">
                    <!-- start page title -->
                    <h1 class="alt-font text-white font-weight-600 mb-0">{{$data->event_title}}</h1>
                    <!-- start breadcrumb -->
                    <div class="breadcrumb">
                        <ul class="text-center text-white text-md-right">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="{{route('events')}}">Events</a></li>
                            <li>{{$data->event_title}}</li>
                        </ul>
                    </div>
                    <!-- end breadcrumb -->
                    <!-- end page title -->
                </div>
            </div>
        </div>
    </section>
    <!-- end page title section -->

    <!-- Info Section -->
    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p><i class="far fa-calendar-alt margin-10px-right"></i>From {{$data->event_start_date}} To {{$data->event_end_date}}</p>
                    <p><i class="fas fa-map-marker-alt margin-10px-right"></i>{{$data->event_location}}</p>
                    {!! $data->event_description !!}
                </div>
            </div>
        </div>
    </section>
    <!-- Info Section -->
@endsection


