@extends('layouts.frontend.app')
@section('title', 'Events | Bay of Bengal Initiative for Multi-Sectoral Technical and Economic Cooperation')
@section('content')
    <!-- start page title section -->
    <section id="page_title" class="wow fadeIn cover-background background-position-center top-space"
             style="background-image:url({{asset('frontend/images/page-title-img.JPG')}});">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row align-items-center">
                <div
                    class="col-12 d-flex flex-column text-center justify-content-center page-title-large padding-30px-tb">
                    <!-- start page title -->
                    <h1 class="alt-font text-white font-weight-600 mb-0">Events</h1>
                    <!-- start breadcrumb -->
                    <div class="breadcrumb">
                        <ul class="text-center text-white text-md-right">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="#">Events</a></li>
                        </ul>
                    </div>
                    <!-- end breadcrumb -->
                    <!-- end page title -->
                </div>
            </div>
        </div>
    </section>
    <!-- end page title section -->
    <section class="wow fadeIn bg-white space_bar">
        <div class="container">
            <form action="{{route('search.events')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="form-control-label">Event Start Date</label>
                            <input type="date" id="event_start_date" name="event_start_date"
                                   value="{{old('event_start_date')}}" placeholder="Event Start Date"
                                   class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="form-control-label">Event End Date</label>
                            <input type="date" id="event_end_date" name="event_end_date"
                                   value="{{old('event_end_date')}}" placeholder="Event End Date" class="form-control"
                                   required>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="form-control-label">Event Location</label>
                            <input type="text" name="event_location" placeholder="Event Location" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <br>
                        <button type="submit" class="btn btn-success">Search</button>
                    </div>
                    <div class="col-sm-2">
                        <br>
                        <a href="{{route('events')}}" class="btn btn-warning">Clear</a>
                    </div>
                </div>
            </form>
            @if(count($data)>0)
                @foreach($data as $key=>$data)
                    <div class="row margin-10px-bottom">
                        <div class="col-12 col-md-2 md-margin-30px-bottom last-paragraph-no-margin">
                            <div
                                class="feature-content padding-10px-all bg-white box-shadow-light lg-padding-20px-all text-center">
                                <div class="alt-font font-weight-600 text-extra-dark-gray"><span
                                        class="text-deep-pink margin-5px-right" style="font-size: 25px;">{{\Carbon\Carbon::parse($data->event_start_date, 'UTC')->isoFormat('Do MMM')}} <br></span> {{\Carbon\Carbon::parse($data->event_start_date, 'UTC')->isoFormat('YYYY')}}
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-2 md-margin-30px-bottom last-paragraph-no-margin">
                            <div
                                class="feature-content padding-10px-all bg-white box-shadow-light lg-padding-20px-all text-center">
                                <div class="alt-font font-weight-600 text-extra-dark-gray"><span
                                        class="text-deep-pink margin-5px-right" style="font-size: 25px;">{{\Carbon\Carbon::parse($data->event_start_date, 'UTC')->isoFormat('Do MMM')}} <br></span> {{\Carbon\Carbon::parse($data->event_start_date, 'UTC')->isoFormat('YYYY')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8 text-center text-lg-left wow fadeIn">
                            <a href="{{route('events-get', $data->id)}}">
                                <div
                                    class="feature-content padding-10px-all bg-white box-shadow-light lg-padding-20px-all download_tb">
                                    <b class="mb-0">{{$data->event_title}}</b>
                                    <p class="text-medium line-height-25 text-medium-gray mb-2">
                                        {{$data->event_location}}
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
                <p>Sorry No data Found</p>
            @endif
        </div>
    </section>
@endsection

@push('js')
    <script>
        $(function ($) {
            $('#event_start_date').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy-mm-dd'
            });
            $('#event_end_date').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy-mm-dd'
            });

        })(jQuery)

    </script>
@endpush

