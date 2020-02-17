@extends('layouts.frontend.app')
@section('title', 'Home- Bay of Bengal Initiative for Multi-Sectoral Technical and Economic Cooperation')
@section('content')
    <style type="text/css">
        .panel-title i {
            font-size: 15px !important;
            color: #2b2b2b !important;
            border-radius: 50px;
            height: 25px;
            width: 25px;
            transition: all .4s;
            cursor: pointer;
            border: 1px solid #2b2b2b;
            line-height: 23px;
        }

        .panel-title:hover i {
            background: #2b2b2b;
            color: #fff !important;
        }


    </style>
    <!-- start page title section -->
    <section id="page_title" class="wow fadeIn cover-background background-position-center top-space"
             style="background-image:url('images/about-banner.jpg');">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row align-items-center">
                <div
                    class="col-12 d-flex flex-column text-center justify-content-center page-title-large padding-30px-tb">
                    <!-- start page title -->
                    <h1 class="alt-font text-white font-weight-600 mb-0">Directors and Divisions</h1>
                    <!-- start breadcrumb -->
                    <div class="breadcrumb">
                        <ul class="text-center text-white text-md-right">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="bimstec-secretariat.php.php">Secretariat</a></li>
                            <li>Directors and Divisions</li>
                        </ul>
                    </div>
                    <!-- end breadcrumb -->
                    <!-- end page title -->
                </div>
            </div>
        </div>
    </section>
    <!-- end page title section -->

    <!-- start overline features box section -->
    <section class="wow fadeIn">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div
                    class="col-12 col-xl-6 col-md-8 margin-three-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                    <p>In accordance with the Memorandum of Association on the Establishment of the BIMSTEC Permanent
                        Secretariat, the Secretariat shall contain an appropriate number
                        of functional
                        units to be called Divisions and each Division shall be headed by a Director. Currently, there
                        are {{count($directors)}} Divisions.</p>
                </div>
            </div>
            <div class="row">
                @foreach($directors as $director)
                    <div
                        class="col-12 col-lg-4 col-md-6 md-margin-four-bottom margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                        <div
                            class="p-4 bg-white border-color-extra-medium-gray border-all text-center padding-eighteen-tb position-relative">
                            <h6 class="alt-font text-extra-dark-gray font-weight-600 margin-35px-bottom">
                                {{$director->division->title}}
                            </h6>
                            <p>{{$director->division->description}}</p>

                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-8">
                                    <!-- start accordion -->
                                    <div class="panel-group accordion-style2" id="{{'accordion-'.$director->id}}">
                                        <!-- start tab content -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a class="accordion-toggle" data-toggle="collapse"
                                                   data-parent="{{'#accordion-'.$director->id}}" href="{{'#collapse-'.$director->id}}">
                                                    <div class="panel-title">
                                                        <i class="indicator fas fa-plus text-extra-dark-gray"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="{{'collapse-'.$director->id}}" class="panel-collapse collapse"
                                                 data-parent="#accordion-main">
                                                {!!$director->division->sectors_activities!!}
                                            </div>
                                        </div>
                                        <!-- end tab content -->
                                    </div>
                                    <!-- end accordion -->
                                </div>
                            </div>

                            <div><a href="{{'#'.$director->id}}"
                                    class="btn btn-dark text-white text-small mt-3 popup-with-move-anim">Show Director
                                    Profile</a></div>

                            <div id="{{$director->id}}"
                                 class="zoom-anim-dialog mfp-hide col-xl-6 col-lg-6 col-md-7 col-11 mx-auto bg-white modal-popup-main padding-50px-all">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <img class="img-fluid" src="{{asset('storage/director/'.$director->image)}}" alt="">
                                        <p class="mt-3 text-center">
                                            <b>{{$director->name}}</b><br>{{$director->designation}}</p>
                                    </div>
                                    <div class="col-sm-5"></div>
                                    <div class="col-sm-4">
                                        <p><b>Contact:</b><br>
                                        {!! $director->contact !!}
                                    </div>
                                </div>
                                <p class="margin-four">
                                    {!! $director->about !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end overline features box section -->

@endsection


