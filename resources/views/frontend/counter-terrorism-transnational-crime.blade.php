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

        .tabs_content {
            margin-left: 15px;
            padding: 0px !important;
        }

        .tab-content a {
            color: #42b250;
        }

        .tab-content a:hover {
            text-decoration: none;
            color: #30833b;
        }

        .btn-success {
            color: #fff !important;
        }
    </style>
    <!-- start page title section -->
    <section id="page_title" class="cover-background background-position-center top-space"
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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 tab-style3">
                    <!-- start tab navigation -->
                    <ul class="nav nav-tabs alt-font text-uppercase text-small text-center font-weight-600 justify-content-center">
                        @foreach($cttcs as $cttc)
                            @if ($loop->first)
                                <li class="nav-item active"><a class="nav-link active" href="{{'#tab_'.$cttc->id}}"
                                                               data-toggle="tab">{{$cttc->title}}</a></li>
                            @else
                                <li class="nav-item"><a class="nav-link" href="{{'#tab_'.$cttc->id}}"
                                                        data-toggle="tab">{{$cttc->title}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                    <!-- end tab navigation -->
                </div>
            </div>
            <div class="tab-content justify-content-center">
            @foreach($cttcs as $cttc)
                <!-- start tab content -->
                    @if ($loop->first)
                        <div class="tab-pane med-text fade in active show" id="{{'tab_'.$cttc->id}}">
                            <div class="col-12 col-lg-12 col-md-12 " data-wow-delay="0.6s"
                                 style="padding-top: 5px;">
                                {!! $cttc->content !!}
                                @if(!is_null($cttc->file))
                                    <div class="row justify-content-center">
                                        <a class="btn btn-sm btn-success"
                                           href="{{route('cttc-download', $cttc->file)}}">Download
                                            PDF</a>
                                    </div>
                                @endif
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-12 tab-style3">
                                        <!-- start tab navigation -->
                                        <ul class="nav nav-tabs alt-font text-uppercase text-small text-center font-weight-600 justify-content-center">
                                            @foreach($cttc_subgroups as $cttc_subgroup)
                                                @if($cttc_subgroup->cttc_page_id == $cttc->id)

                                                    <li class="nav-item"><a class="nav-link"
                                                                            href="{{'#tabSub_'.$cttc_subgroup->id}}"
                                                                            data-toggle="tab">{{$cttc_subgroup->title}}</a>
                                                    </li>

                                                @endif
                                            @endforeach
                                        </ul>
                                        <!-- end tab navigation -->
                                    </div>
                                </div>
                                <div class="tab-content">
                                @foreach($cttc_subgroups as $cttc_subgroup)
                                    @if($cttc_subgroup->cttc_page_id == $cttc->id)
                                        <!-- start tab content -->

                                            <div class="tab-pane med-text fade in show"
                                                 id="{{'tabSub_'.$cttc_subgroup->id}}">
                                                <div class="col-12 col-lg-12 col-md-12 "
                                                     data-wow-delay="0.6s"
                                                     style="padding-top: 5px; ">
                                                    {!! $cttc_subgroup->content !!}
                                                    @if(!is_null($cttc_subgroup->file))
                                                        <div class="row justify-content-center">
                                                            <a class="btn btn-sm btn-success"
                                                               href="{{route('cttc-download', $cttc_subgroup->file)}}">Download
                                                                PDF</a>
                                                        </div>
                                                    @endif
                                                    <br>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-12 tab-style3">
                                                            <!-- start tab navigation -->
                                                            <ul class="nav nav-tabs alt-font text-uppercase text-small text-center font-weight-600 justify-content-center">
                                                                @foreach($cttc_subsubgroups as $cttc_subsubgroup)
                                                                    @if($cttc_subsubgroup->cttc_subgroup_id == $cttc_subgroup->id)

                                                                        <li class="nav-item"><a class="nav-link"
                                                                                                href="{{'#tabSubsub_'.$cttc_subsubgroup->id}}"
                                                                                                data-toggle="tab">{{$cttc_subsubgroup->title}}</a>
                                                                        </li>

                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                            <!-- end tab navigation -->
                                                        </div>
                                                    </div>
                                                    <div class="tab-content">
                                                    @foreach($cttc_subsubgroups as $cttc_subsubgroup)
                                                        @if($cttc_subsubgroup->cttc_subgroup_id == $cttc_subgroup->id)
                                                            <!-- start tab content -->

                                                                <div class="tab-pane med-text fade in show"
                                                                     id="{{'tabSubsub_'.$cttc_subsubgroup->id}}">
                                                                    <div
                                                                        class="col-12 col-lg-12 col-md-12 "
                                                                        data-wow-delay="0.6s"
                                                                        style="padding-top: 5px; ">
                                                                        {!! $cttc_subsubgroup->content !!}
                                                                        @if(!is_null($cttc_subsubgroup->file))
                                                                            <div class="row justify-content-center">
                                                                                <a class="btn btn-sm btn-success"
                                                                                   href="{{route('cttc-download', $cttc_subsubgroup->file)}}">Download
                                                                                    PDF</a>
                                                                            </div>
                                                                        @endif
                                                                        <br>
                                                                        <br>
                                                                    </div>
                                                                </div>

                                                                <!-- end tab content -->
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- end tab content -->
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="tab-pane med-text fade in show" id="{{'tab_'.$cttc->id}}">
                            <div class="col-12 col-lg-12 col-md-12 " data-wow-delay="0.6s"
                                 style="padding-top: 5px; ">
                                {!! $cttc->content !!}
                                @if(!is_null($cttc->file))
                                    <div class="row justify-content-center">
                                        <a class="btn btn-sm btn-success"
                                           href="{{route('cttc-download', $cttc->file)}}">Download
                                            PDF</a></div>
                                @endif
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-12 tab-style3">
                                        <!-- start tab navigation -->
                                        <ul class="nav nav-tabs alt-font text-uppercase text-small text-center font-weight-600 justify-content-center">
                                            @foreach($cttc_subgroups as $cttc_subgroup)
                                                @if($cttc_subgroup->cttc_page_id == $cttc->id)

                                                    <li class="nav-item"><a class="nav-link"
                                                                            href="{{'#tabSub_'.$cttc_subgroup->id}}"
                                                                            data-toggle="tab">{{$cttc_subgroup->title}}</a>
                                                    </li>

                                                @endif
                                            @endforeach
                                        </ul>
                                        <!-- end tab navigation -->
                                    </div>
                                </div>
                                <div class="tab-content">
                                @foreach($cttc_subgroups as $cttc_subgroup)
                                    @if($cttc_subgroup->cttc_page_id == $cttc->id)
                                        <!-- start tab content -->

                                            <div class="tab-pane med-text fade in show"
                                                 id="{{'tabSub_'.$cttc_subgroup->id}}">
                                                <div class="col-12 col-lg-12 col-md-12 "
                                                     data-wow-delay="0.6s"
                                                     style="padding-top: 5px; ">
                                                    {!! $cttc_subgroup->content !!}
                                                    @if(!is_null($cttc_subgroup->file))
                                                        <div class="row justify-content-center">
                                                            <a class="btn btn-sm btn-success"
                                                               href="{{route('cttc-download', $cttc_subgroup->file)}}">Download
                                                                PDF</a></div>
                                                    @endif
                                                    <br>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-12 tab-style3">
                                                            <!-- start tab navigation -->
                                                            <ul class="nav nav-tabs alt-font text-uppercase text-small text-center font-weight-600 justify-content-center">
                                                                @foreach($cttc_subsubgroups as $cttc_subsubgroup)
                                                                    @if($cttc_subsubgroup->cttc_subgroup_id == $cttc_subgroup->id)

                                                                        <li class="nav-item"><a class="nav-link"
                                                                                                href="{{'#tabSubsub_'.$cttc_subsubgroup->id}}"
                                                                                                data-toggle="tab">{{$cttc_subsubgroup->title}}</a>
                                                                        </li>

                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                            <!-- end tab navigation -->
                                                        </div>
                                                    </div>
                                                    <div class="tab-content">
                                                    @foreach($cttc_subsubgroups as $cttc_subsubgroup)
                                                        @if($cttc_subsubgroup->cttc_subgroup_id == $cttc_subgroup->id)
                                                            <!-- start tab content -->

                                                                <div class="tab-pane med-text fade in show"
                                                                     id="{{'tabSubsub_'.$cttc_subsubgroup->id}}">
                                                                    <div
                                                                        class="col-12 col-lg-12 col-md-12 "
                                                                        data-wow-delay="0.6s"
                                                                        style="padding-top: 5px; ">
                                                                        {!! $cttc_subsubgroup->content !!}
                                                                        @if(!is_null($cttc_subsubgroup->file))
                                                                            <div class="row justify-content-center">
                                                                                <a class="btn btn-sm btn-success"
                                                                                   href="{{route('cttc-download', $cttc_subsubgroup->file)}}">Download
                                                                                    PDF</a></div>
                                                                        @endif
                                                                        <br>
                                                                        <br>
                                                                    </div>
                                                                </div>

                                                                <!-- end tab content -->
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- end tab content -->
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                <!-- end tab content -->
                @endforeach
            </div>
        </div>
    </section>
    <!-- end tab style 01 section -->

@endsection
