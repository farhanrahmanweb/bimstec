@extends('layouts.frontend.app')
@section('title', 'Home- Bay of Bengal Initiative for Multi-Sectoral Technical and Economic Cooperation')
@section('content')
    <!-- start page title section -->
    <section id="page_title" class="wow fadeIn cover-background background-position-center top-space" style="background-image:url({{asset('frontend/images/about-banner.jpg')}});">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 d-flex flex-column text-center justify-content-center page-title-large padding-30px-tb">
                    <!-- start page title -->
                    <h1 class="alt-font text-white font-weight-600 mb-0">BIMSTEC Organogram</h1>
                    <!-- start breadcrumb -->
                    <div class="breadcrumb">
                        <ul class="text-center text-white text-md-right">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="bimstec-secretariat.php">Secretariat</a></li>
                            <li>BIMSTEC Organogram</li>
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
                    <img class="w-100" src="{{asset('frontend/images/Organogram.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Info Section -->
@endsection


