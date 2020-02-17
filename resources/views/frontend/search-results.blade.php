@extends('layouts.frontend.app')
@section('title', 'Home- Bay of Bengal Initiative for Multi-Sectoral Technical and Economic Cooperation')
@section('content')
    <!-- start page title section -->
    <section id="page_title" class="wow fadeIn cover-background background-position-center top-space">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row align-items-center">
                <div
                    class="col-12 d-flex flex-column text-center justify-content-center page-title-large padding-30px-tb">
                    <!-- start page title -->
                    <h1 class="alt-font text-white font-weight-600 mb-0">Search Results</h1>
                    <!-- end page title -->
                </div>
            </div>
        </div>
    </section>
    <!-- end page title section -->
    <section class="wow fadeIn bg-white space_bar">
        <div class="container">
            <form action="{{route('search')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <input name="query" class="form-control" value="{{$query}}" placeholder="Search.." required>
                    </div>

                    <div class="col-sm-2">
                        <select name="type" class="custom-select" required>
                            <option value="all">All</option>
                            <option value="events">Events</option>
                            <option value="documents">Documents</option>
                        </select>
                    </div>

                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-success">Search</button>
                    </div>
                </div>
            </form>
            @if(count($results)>0)
                @foreach($results as $key=>$result)
                    <div class="row margin-10px-bottom">
                        <div class="col-12 col-lg-10 text-center text-lg-left wow fadeIn">
                            <div
                                class="feature-content padding-10px-all bg-white box-shadow-light lg-padding-20px-all download_tb">
                                @if($result->title == null)
                                    <h5 class="mb-0">{{$result->event_title}}</h5>
                                    <p class="text-medium line-height-25 text-medium-gray mb-2">
                                        {{$result->event_location}}
                                    </p>
                                    <p class="text-medium line-height-25 text-medium-gray mb-2">
                                        From {{$result->event_start_date }} to {{$result->event_end_date}}
                                    </p>
                                @else
                                    <h5 class="mb-0">{{$result->title}}</h5>
                                    <p class="text-medium line-height-25 text-medium-gray mb-2">
                                        {{$result->description}}
                                    </p>
                                    <form action="{{route('document.download')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$result->id}}" class="form-control">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <input type="password" name="password" placeholder="Enter Password"
                                                           class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <button type="submit" class="btn btn-success">Download</button>
                                            </div>
                                        </div>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>Sorry No data Found</p>
            @endif
        </div>
    </section>
@endsection



