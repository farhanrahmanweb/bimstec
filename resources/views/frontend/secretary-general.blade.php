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
    </style>
@endpush
@section('content')
    <!-- start page title section -->
    <section id="page_title" class="wow fadeIn cover-background background-position-center top-space" style="background-image:url({{asset('frontend/images/page-title-img.JPG')}});">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 d-flex flex-column text-center justify-content-center page-title-large padding-30px-tb">
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
                        <li class="nav-item"><a class="nav-link active" href="#tab_sec1" data-toggle="tab">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tab_sec2" data-toggle="tab">Secretary General's Page</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tab_sec3" data-toggle="tab">Statements</a></li>
                    </ul>
                    <!-- end tab navigation -->
                </div>
            </div>
            <div class="tab-content">
                <!-- start tab content -->
                <div class="tab-pane med-text fade in active show profile" id="tab_sec1">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-12 sm-margin-30px-bottom margin-30px-bottom text-center">
                            <img src="{{asset('frontend/images/trade-investment-1.jpg')}}" alt="" class="w-100"/>
                        </div>
                        <div class="col-12 col-lg-10 col-md-10 offset-lg-1 text-justify">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it
                                has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing
                                packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                                Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and
                                going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus
                                Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.
                                The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and
                                going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus
                                Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.
                                The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
                                Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
                                Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>

                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of
                                text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a
                                dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is
                                therefore always free from repetition, injected humour, or non-characteristic words etc.</p>

                            <a href="#" class="btn btn-very-small btn-dark-gray text-very-small border-radius-4 lg-margin-15px-bottom d-table d-lg-inline-block md-margin-lr-auto"><i
                                    class="fab fa-twitter" aria-hidden="true"></i> Follow @profile_person</a>
                        </div>
                    </div>
                </div>
                <!-- end tab content -->
                <!-- start tab content -->
                <div class="tab-pane fade in" id="tab_sec2">
                    <div class="row align-items-center">
                        <div class="col-sm-12">
                            <table class="table">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Title</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($secretaryPages as $key=>$secretarypage)
                                    <tr>
                                        <th scope="row">{{$key+1}}</th>
                                        <td>{{\Carbon\Carbon::parse($secretarypage->date, 'UTC')->isoFormat('Do MMM YYYY')}}</td>
                                        <td>
                                            <u><a href="{{route('secretary-page', $secretarypage->id)}}">{{\Illuminate\Support\Str::substr($secretarypage->title, 0, 100)}}..</a></u>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end tab content -->
                <!-- start tab content -->
                <div class="tab-pane fade in" id="tab_sec3">
                    <div class="container">
                        @foreach($statements as $key=>$statement)
                            <div class="row margin-10px-bottom align-items-center">
                                <div class="col-12 col-md-2 md-margin-30px-bottom last-paragraph-no-margin">
                                    <div class="feature-content padding-10px-all bg-white box-shadow-light lg-padding-20px-all text-center">
                                        <div class="alt-font font-weight-600 text-extra-dark-gray"><span class="text-deep-pink margin-5px-right" style="font-size: 25px;">{{\Carbon\Carbon::parse($statement->date, 'UTC')->isoFormat('Do MMM')}} <br></span> {{\Carbon\Carbon::parse($statement->date, 'UTC')->isoFormat('YYYY')}}
                                        </div>
                                        {{--                                        <p>Danmodi, DHAKA</p>--}}
                                    </div>
                                </div>

                                <div class="col-12 col-lg-10 text-center text-lg-left">
                                    <div class="feature-content padding-10px-all bg-white box-shadow-light lg-padding-20px-all download_tb h-100 position-relative">
                                        <p class="text-medium my-3">{{$statement->title}}</p>
                                        <a class="btn d-inline-block btn-success btn-small text-extra-small" href="{{asset('storage/secretary/'.$statement->file)}}"
                                           target="_blank">Download</a>
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



