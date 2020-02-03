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
                    <h1 class="alt-font text-white font-weight-600 mb-0">BIMSTEC Secretariat</h1>
                    <!-- start breadcrumb -->
                    <div class="breadcrumb">
                        <ul class="text-center text-white text-md-right">
                            <li><a href="index.php">Home</a></li>
                            <li>BIMSTEC Secretariat</li>
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
            <div class="row align-items-center">
                <div class="col-12 col-md-6 sm-margin-30px-bottom p-5">
                    <img class="w-100" src="{{asset('frontend/images/Secretariat.jpg')}}" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <h6 class="alt-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase">BIMSTEC Secretariat</h6>
                    <p>After a span of 17 years of the founding of BIMSTEC as a regional organization, it’s long cherished Permanent Secretariat was established in Dhaka, Bangladesh on <b>13th
                            September 2014</b> to serve the BIMSTEC Member States. While inaugurating the Secretariat, <b>Her Excellency Sheikh Hasina</b>, Hon’ble Prime Minister of the People’s
                        Republic of
                        Bangladesh called it ‘historic’. She further remarked, “Let BIMSTEC Secretariat become a hallmark of proud partnership of the Seven-Member States the Bay of Bengal”.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Info Section -->
@endsection

