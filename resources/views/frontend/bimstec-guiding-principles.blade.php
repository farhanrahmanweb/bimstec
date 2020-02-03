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
                    <h1 class="alt-font text-white font-weight-600 mb-0">BIMSTEC Guiding Principles</h1>
                    <!-- start breadcrumb -->
                    <div class="breadcrumb">
                        <ul class="text-center text-white text-md-right">
                            <li><a href="index.php">Home</a></li>
                            <li>BIMSTEC Guiding Principles</li>
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
                    <h6 class="alt-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase">BIMSTEC Guiding Principles</h6>
                    <p>The organization functions as per the founding principles of BIMSTEC as laid down in the Bangkok Declaration of 6 June 1997 and directions given by the Leaders of the Member States.<br><br>

                        <b>The founding principles of BIMSTEC are as under:</b><br><br>

                        -Cooperation within BIMSTEC will be based on respect for the principle of sovereign equality, territorial integrity, political independence, no-interference in internal affairs, peaceful co- existence and mutual benefit.
                        -Cooperation within BIMSTEC will constitute an addition to and not be a substitute for bilateral, regional or multilateral cooperation involving the Member States.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Info Section -->
@endsection


