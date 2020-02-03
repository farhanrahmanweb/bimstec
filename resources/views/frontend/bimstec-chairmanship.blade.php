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
                    <h1 class="alt-font text-white font-weight-600 mb-0">BIMSTEC Chairmanship</h1>
                    <!-- start breadcrumb -->
                    <div class="breadcrumb">
                        <ul class="text-center text-white text-md-right">
                            <li><a href="index.php">Home</a></li>
                            <li>BIMSTEC Chairmanship</li>
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
                    <h6 class="alt-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase">BIMSTEC Chairmanship</h6>
                    <span class="mb-4 separator-line-horrizontal-medium-light2 bg-deep-pink d-table mr-auto width-100px"></span>
                    <p>The Chairmanship of BIMSTEC rotates among the Member States. Sri Lanka is the present chair of BIMSTEC.
                        <br><br>
                        <b>Chair of BIMSTEC since 1997:</b></p>
                    <table class="table table-striped table-inverse" style="border-bottom: 5px solid #00a751;">
                        <tbody>
                        <tr>
                            <td>1997-1999</td>
                            <td>BANGLADESH</td>
                        </tr>
                        <tr>
                            <td>2000</td>
                            <td>INDIA</td>
                        </tr>
                        <tr>
                            <td>2001-2002</td>
                            <td>MYANMAR</td>
                        </tr>
                        <tr>
                            <td>2002-2003</td>
                            <td>SRI LANKA</td>
                        </tr>
                        <tr>
                            <td>2004-2005</td>
                            <td>THAILAND</td>
                        </tr>
                        <tr>
                            <td>2005-2006</td>
                            <td>BANGLADESH</td>
                        </tr>
                        <tr>
                            <td>2006-2008</td>
                            <td>INDIA</td>
                        </tr>
                        <tr>
                            <td>2009-2014</td>
                            <td>MYANMAR</td>
                        </tr>
                        <tr>
                            <td>2015- AUG -2018</td>
                            <td>NEPAL</td>
                        </tr>
                        <tr>
                            <td>SEPT 2018-</td>
                            <td>SRI LANKA</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Info Section -->
@endsection


