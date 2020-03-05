@extends('layouts.frontend.app')
@section('title', 'Home- Bay of Bengal Initiative for Multi-Sectoral Technical and Economic Cooperation')
@section('content')
    <div class="main-title">
        <p>Bay of Bengal Initiative for Multi-Sectoral Technical and Economic Cooperation</p>
        <span>“Towards a Peaceful, Prosperous and Sustainable Bay of Bengal Region”</span>
        <img src="{{asset('frontend/images/flags.png')}}" alt="">
    </div>
    <!-- start slider section -->
    <section class="wow fadeIn example no-padding no-transition">
        <div class="owl-carousel owl-theme">
            @foreach($sliders as $slider)
                <div class="items">
                    <div class="banner" style="background-image: url({{asset('storage/slider/'.$slider->image)}})">
                        <div class="banner-content  col-md-8" style="word-wrap: break-word">
                            <p class="wow fadeInUp">
                                {{$slider->description}}
                            </p>
                            <h1 class="wow fadeInUp">{{$slider->title}}</h1>
                            <a class="wow fadeInUp btn btn-medium btn-transparent-white margin-five-top mx-auto d-table d-lg-inline-block md-margin-lr-auto" data-wow-delay="0.6s"
                               href="{{$slider->link}}">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- end slider section -->

    <!-- start story section -->
    <section class="wow fadeIn">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-5 text-center md-margin-30px-bottom wow fadeInLeft">
                    <img src="{{asset('frontend/images/page-title-img.jfif')}}" alt="" class="border-radius-6 w-70">
                </div>
                <div class="col-12 col-lg-7 padding-eight-lr text-center text-lg-left lg-padding-nine-right md-padding-15px-lr wow fadeInRight" data-wow-delay="0.2s">
                    <h6 class="alt-font text-extra-dark margin-5px-bottom">M. Shahidul Islam</h6>
                    <span class="text-deep-gray alt-font margin-25px-bottom d-inline-block text-medium" style="font-size: 13px;">Secretary General of BIMSTEC</span>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the
                        industry's standard dummy text ever since. Lorem Ipsum is printing and typesetting simply dummy text.</p>
                    <a href="{{route('secretary-general')}}" class="btn btn-dark-gray btn-small text-extra-small margin-5px-top"> Read More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end story section -->

    <!-- start Event slider style 01 section -->
    <section id="upcoming_events" class="wow fadeIn bg-light-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-6 col-md-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                    <h5 class="alt-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase">Upcoming Events</h5>
                    <span class="separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px"></span>
                </div>
            </div>
            <div class="row position-relative">
                <div class="swiper-container swiper-pagination-bottom black-move blog-slider swiper-three-slides">
                    <div class="swiper-wrapper">
                        <!-- start testimonial item -->
                        @if(count($upcomingEvents)>0)
                            @foreach($upcomingEvents as $key=>$event)
                                <div class="col-12 col-lg-4 col-md-6 swiper-slide md-margin-four-bottom">
                                    <div class="margin-half-all bg-white box-shadow-light text-center padding-fourteen-all sm-padding-30px-all">
                                        <p class="md-margin-15px-bottom sm-margin-20px-bottom">{{$event->event_title}}</p>
                                        <span class="text-extra-dark-gray text-small text-uppercase d-block line-height-10 alt-font font-weight-600 py-2">{{$event->event_location}}</span>
                                        <span class="text-extra-dark-gray text-small text-uppercase d-block line-height-10 alt-font font-weight-600">

                                    @if($event->event_start_date==$event->event_end_date)
                                                {{\Carbon\Carbon::parse($event->event_start_date, 'UTC')->isoFormat('Do MMMM YYYY')}}
                                            @else
                                                @php
                                                    $edate = \Carbon\Carbon::parse($event->event_end_date, 'UTC');
                                                    $sdate = \Carbon\Carbon::parse($event->event_start_date, 'UTC');
                                                @endphp
                                                {{$sdate->isoFormat('D')}}-{{$edate->isoFormat('D')}} {{\Carbon\Carbon::parse($event->event_start_date, 'UTC')->isoFormat('MMMM YYYY')}}
                                            @endif
                                </span>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-12 col-lg-4 col-md-6 swiper-slide md-margin-four-bottom">
                                <div class="margin-half-all bg-white box-shadow-light text-center padding-fourteen-all sm-padding-30px-all">
                                    <h4 class="md-margin-15px-bottom sm-margin-20px-bottom">Currently No Event</h4>
                                </div>
                            </div>
                    @endif
                    <!-- end testimonial item -->
                    </div>
                    <div class="swiper-pagination swiper-pagination-three-slides h-auto"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Event slider style 01 section -->

    <!-- feature box section -->
    <section id="focus_area" class="wow fadeIn lg-padding-two-lr md-no-padding-lr">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-6 col-md-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                    <h5 class="alt-font font-weight-700 text-white margin-20px-bottom text-uppercase">Areas of Cooperation</h5>
                    <span class="separator-line-horrizontal-medium-light2 bg-white d-table mx-auto width-100px"></span>
                </div>
            </div>
            <div class="row no-gutters feature-box feature-box-7">
                <!-- start feature item -->
                <div class="col-12 col-xl-3 col-md-6 sm-margin-five-bottom wow fadeInLeft last-paragraph-no-margin">
                    <div class="box">
                        <a href="{{route('trade-investment')}}">
                            <div class="content">
                                <figure>
                                    <img class="margin-15px-bottom" src="{{asset('frontend/images/images/index.png')}}" alt="">
                                    <span class="alt-font text-white d-block margin-10px-bottom">Trade & Investment</span>
                                    <div class="details"></div>
                                </figure>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end feature item -->
                <!-- start feature item -->
                <div class="col-12 col-xl-3 col-md-6 sm-margin-five-bottom wow fadeInLeft last-paragraph-no-margin" data-wow-delay="0.2s">
                    <div class="box">
                        <a href="{{route('transport-communication')}}">
                            <div class="content">
                                <figure>
                                    <img class="margin-15px-bottom" src="{{asset('frontend/images/images/world.png')}}" alt="">
                                    <span class="alt-font text-white d-block margin-10px-bottom">Transport & Communication</span>
                                    <div class="details"></div>
                                </figure>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end feature item -->
                <!-- start feature item -->
                <div class="col-12 col-xl-3 col-md-6 sm-margin-five-bottom wow fadeInLeft last-paragraph-no-margin" data-wow-delay="0.4s">
                    <div class="box lg-no-border-left lg-no-border-top">
                        <a href="{{route('energy')}}">
                            <div class="content">
                                <figure>
                                    <img class="margin-15px-bottom" src="{{asset('frontend/images/images/renewable-energy.png')}}" alt="">
                                    <span class="alt-font text-white d-block margin-10px-bottom">Energy</span>
                                    <div class="details"></div>
                                </figure>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end feature item -->
                <!-- start feature item -->
                <div class="col-12 col-xl-3 col-md-6 wow fadeInLeft last-paragraph-no-margin" data-wow-delay="0.6s">
                    <div class="box lg-no-border-top">
                        <a href="{{route('tourism')}}">
                            <div class="content">
                                <figure>
                                    <img class="margin-15px-bottom" src="{{asset('frontend/images/images/destination.png')}}" alt="">
                                    <span class="alt-font text-white d-block margin-10px-bottom">Tourism</span>
                                    <div class="details"></div>
                                </figure>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end feature item -->
            </div>
            <div class="row no-gutters feature-box feature-box-7">
                <!-- start feature item -->
                <div class="col-12 col-xl-3 col-md-6 sm-margin-five-bottom wow fadeInLeft last-paragraph-no-margin">
                    <div class="box">
                        <a href="{{route('technology')}}">
                            <div class="content">
                                <figure>
                                    <img class="margin-15px-bottom" src="{{asset('frontend/images/images/chip.png')}}" alt="">
                                    <span class="alt-font text-white d-block margin-10px-bottom">Technology</span>
                                    <div class="details"></div>
                                </figure>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end feature item -->
                <!-- start feature item -->
                <div class="col-12 col-xl-3 col-md-6 sm-margin-five-bottom wow fadeInLeft last-paragraph-no-margin" data-wow-delay="0.2s">
                    <div class="box">
                        <a href="{{route('fisheries')}}">
                            <div class="content">
                                <figure>
                                    <img class="margin-15px-bottom" src="{{asset('frontend/images/images/icon-3.png')}}" alt="">
                                    <span class="alt-font text-white d-block margin-10px-bottom">Fisheries</span>
                                    <div class="details"></div>
                                </figure>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end feature item -->
                <!-- start feature item -->
                <div class="col-12 col-xl-3 col-md-6 sm-margin-five-bottom wow fadeInLeft last-paragraph-no-margin" data-wow-delay="0.4s">
                    <div class="box lg-no-border-left lg-no-border-top">
                        <a href="{{route('agriculture')}}">
                            <div class="content">
                                <figure>
                                    <img class="margin-15px-bottom" src="{{asset('frontend/images/images/harvest.png')}}" alt="">
                                    <span class="alt-font text-white d-block margin-10px-bottom">Agriculture</span>
                                    <div class="details"></div>
                                </figure>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end feature item -->
                <!-- start feature item -->
                <div class="col-12 col-xl-3 col-md-6 wow fadeInLeft last-paragraph-no-margin" data-wow-delay="0.6s">
                    <div class="box lg-no-border-top">
                        <a href="{{route('public-health')}}">
                            <div class="content">
                                <figure>
                                    <img class="margin-15px-bottom" src="{{asset('frontend/images/images/heart.png')}}" alt="">
                                    <span class="alt-font text-white d-block margin-10px-bottom">Public Health</span>
                                    <div class="details"></div>
                                </figure>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end feature item -->
            </div>
            <div class="row no-gutters feature-box feature-box-7">
                <!-- start feature item -->
                <div class="col-12 col-xl-3 col-md-6 sm-margin-five-bottom wow fadeInLeft last-paragraph-no-margin">
                    <div class="box">
                        <a href="{{route('poverty-alleviation')}}">
                            <div class="content">
                                <figure>
                                    <img class="margin-15px-bottom" src="{{asset('frontend/images/images/poverty.png')}}" alt="">
                                    <span class="alt-font text-white d-block margin-10px-bottom">Poverty Alleviation</span>
                                    <div class="details"></div>
                                </figure>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end feature item -->
                <!-- start feature item -->
                <div class="col-12 col-xl-3 col-md-6 sm-margin-five-bottom wow fadeInLeft last-paragraph-no-margin" data-wow-delay="0.2s">
                    <div class="box">
                        <a href="{{route('counter-terrorism-transnational-crime')}}">
                            <div class="content">
                                <figure>
                                    <img class="margin-15px-bottom" src="{{asset('frontend/images/images/counter-t.png')}}" alt="">
                                    <span class="alt-font text-white d-block margin-10px-bottom">Counter-Terrorism & Transnational Crime</span>
                                    <div class="details"></div>
                                </figure>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end feature item -->
                <!-- start feature item -->
                <div class="col-12 col-xl-3 col-md-6 sm-margin-five-bottom wow fadeInLeft last-paragraph-no-margin" data-wow-delay="0.4s">
                    <div class="box lg-no-border-left lg-no-border-top">
                        <a href="{{route('environment-disaster-management')}}">
                            <div class="content">
                                <figure>
                                    <img class="margin-15px-bottom" src="{{asset('frontend/images/images/environment.png')}}" alt="">
                                    <span class="alt-font text-white d-block margin-10px-bottom">Environment & Disaster Management</span>
                                    <div class="details"></div>
                                </figure>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end feature item -->
                <!-- start feature item -->
                <div class="col-12 col-xl-3 col-md-6 wow fadeInLeft last-paragraph-no-margin" data-wow-delay="0.6s">
                    <div class="box lg-no-border-top">
                        <a href="{{route('people-to-people-contact')}}">
                            <div class="content">
                                <figure>
                                    <img class="margin-15px-bottom" src="{{asset('frontend/images/images/p-to-p.png')}}" alt="">
                                    <span class="alt-font text-white d-block margin-10px-bottom">People-to-People Contact</span>
                                    <div class="details"></div>
                                </figure>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end feature item -->
            </div>
            <div class="row no-gutters feature-box feature-box-7">
                <!-- start feature item -->
                <div class="col-12 col-xl-3 col-md-6 sm-margin-five-bottom wow fadeInLeft last-paragraph-no-margin">
                    <div class="box">
                        <div class="content">
                        </div>
                    </div>
                </div>
                <!-- end feature item -->
                <!-- start feature item -->
                <div class="col-12 col-xl-3 col-md-6 sm-margin-five-bottom wow fadeInLeft last-paragraph-no-margin">
                    <div class="box">
                        <a href="{{route('cultural-cooperation')}}">
                            <div class="content">
                                <figure>
                                    <img class="margin-15px-bottom" src="{{asset('frontend/images/images/cultural.png')}}" alt="">
                                    <span class="alt-font text-white d-block margin-10px-bottom">Cultural Cooperation</span>
                                    <div class="details"></div>
                                </figure>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end feature item -->
                <!-- start feature item -->
                <div class="col-12 col-xl-3 col-md-6 sm-margin-five-bottom wow fadeInLeft last-paragraph-no-margin" data-wow-delay="0.2s">
                    <div class="box">
                        <a href="{{route('climate-change')}}">
                            <div class="content">
                                <figure>
                                    <img class="margin-15px-bottom" src="{{asset('frontend/images/images/climate.png')}}" alt="">
                                    <span class="alt-font text-white d-block margin-10px-bottom">Climate Change</span>
                                    <div class="details"></div>
                                </figure>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end feature item -->
                <!-- start feature item -->
                <div class="col-12 col-xl-3 col-md-6 sm-margin-five-bottom wow fadeInLeft last-paragraph-no-margin" data-wow-delay="0.2s">
                    <div class="box">
                        <div class="content">
                        </div>
                    </div>
                </div>
                <!-- end feature item -->
            </div>
        </div>
    </section>
    <!-- end feature box section -->

    <!-- start Event slider style 01 section -->
    <section id="upcoming_events" class="wow fadeIn bg-light-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-6 col-md-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                    <h5 class="alt-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase">Recent Events</h5>
                    <span class="separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px"></span>
                </div>
            </div>
            <div class="row position-relative">
                <div class="swiper-container swiper-pagination-bottom black-move blog-slider swiper-three-slides">
                    <div class="swiper-wrapper">
                        <!-- start testimonial item -->
                        @if(count($upcomingEvents)>0)
                            @foreach($upcomingEvents as $key=>$event)
                                <div class="col-12 col-lg-4 col-md-6 swiper-slide md-margin-four-bottom">
                                    <div class="margin-half-all bg-white box-shadow-light text-center padding-fourteen-all sm-padding-30px-all">
                                        <p class="md-margin-15px-bottom sm-margin-20px-bottom">{{$event->event_title}}</p>
                                        <span class="text-extra-dark-gray text-small text-uppercase d-block line-height-10 alt-font font-weight-600 py-2">{{$event->event_location}}</span>
                                        <span class="text-extra-dark-gray text-small text-uppercase d-block line-height-10 alt-font font-weight-600">

                                    @if($event->event_start_date==$event->event_end_date)
                                                {{\Carbon\Carbon::parse($event->event_start_date, 'UTC')->isoFormat('Do MMMM YYYY')}}
                                            @else
                                                @php
                                                    $edate = \Carbon\Carbon::parse($event->event_end_date, 'UTC');
                                                    $sdate = \Carbon\Carbon::parse($event->event_start_date, 'UTC');
                                                @endphp
                                                {{$sdate->isoFormat('D')}}-{{$edate->isoFormat('D')}} {{\Carbon\Carbon::parse($event->event_start_date, 'UTC')->isoFormat('MMMM YYYY')}}
                                            @endif
                                </span>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-12 col-lg-4 col-md-6 swiper-slide md-margin-four-bottom">
                                <div class="margin-half-all bg-white box-shadow-light text-center padding-fourteen-all sm-padding-30px-all">
                                    <h4 class="md-margin-15px-bottom sm-margin-20px-bottom">Currently No Event</h4>
                                </div>
                            </div>
                    @endif
                    <!-- end testimonial item -->
                    </div>
                    <div class="swiper-pagination swiper-pagination-three-slides h-auto"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Event slider style 01 section -->

@endsection
