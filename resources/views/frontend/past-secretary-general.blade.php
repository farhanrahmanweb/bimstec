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
                    <h1 class="alt-font text-white font-weight-600 mb-0">Past Secretary Generalp</h1>
                    <!-- start breadcrumb -->
                    <div class="breadcrumb">
                        <ul class="text-center text-white text-md-right">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="bimstec-secretariat.php.php">Secretariat</a></li>
                            <li>Past Secretary General</li>
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
                    <h6 class="alt-font text-center font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase">Past Secretary General</h6>
                    <span class="mb-4 separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px"></span>

                    <table class="table table-striped table-inverse margin-five-top" style="border-bottom: 5px solid #00a751;">
                        <thead>
                        <tr>
                            <th width="30px"></th>
                            <th>Name</th>
                            <th>Term of Office</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>01</td>
                            <td>H.E. Mr. Sumith Nakandala</td>
                            <td>August 2014 - September 2017</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Info Section -->
@endsection


