@extends('layouts.frontend.app')
@section('title', 'Home- Bay of Bengal Initiative for Multi-Sectoral Technical and Economic Cooperation')
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
                    <h1 class="alt-font text-white font-weight-600 mb-0">Documents</h1>
                    <!-- start breadcrumb -->
                    <div class="breadcrumb">
                        <ul class="text-center text-white text-md-right">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="#">Documents</a></li>
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
            <form action="{{route('search.document')}}" method="post">
                @csrf
                <div class="row justify-content-center align-items-center mb-5">
                    <div class="col-sm-2">
                        <div class="select-style select">
                            <select name="year" class="bg-transparent mb-0" required>
                                <option value="">Select Year</option>
                                @foreach($years as $key=>$year)
                                    <option value="{{$year->year}}"> {{$year->year}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="select-style select">
                            <select name="category_id" class="bg-transparent mb-0">
                                <option value="">Select Category</option>
                                @foreach($categorys as $key=>$category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="select-style select">
                            <select name="subcategory_id" class="bg-transparent mb-0">
                                <option value="">Select SubCategory</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn d-inline-block btn-dark-gray btn-small text-extra-small">
                            Search
                        </button>
                        {{--                        <a href="{{route('documents')}}" class="btn d-inline-block btn-warning">Clear</a>--}}
                    </div>
                </div>
            </form>
            @if(count($documents)>0)
                @foreach($documents as $key=>$document)
                    {{--                {{$document}}--}}
                    <div class="row margin-10px-bottom">
                        <div class="col-12 col-md-2 md-margin-30px-bottom last-paragraph-no-margin">
                            <div
                                class="feature-content padding-10px-all bg-white box-shadow-light lg-padding-20px-all text-center">
                                <div class="alt-font font-weight-600 text-extra-dark-gray"><span
                                        class="text-deep-pink margin-5px-right" style="font-size: 25px;">{{\Carbon\Carbon::parse($document->document_date, 'UTC')->isoFormat('Do MMM')}} <br></span> {{\Carbon\Carbon::parse($document->document_date, 'UTC')->isoFormat('YYYY')}}
                                </div>
                                @if($document->category !== null)
                                    <p>{{$document->category->name}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-12 col-lg-10 text-center text-lg-left wow fadeIn">
                            <div
                                class="feature-content padding-10px-all bg-white box-shadow-light lg-padding-20px-all download_tb h-100 position-relative">

                                <b class="mb-0">
                                    @if(strlen($document->title)>60)
                                        {{substr($document->title, 0, 59)}}...
                                    @else
                                        {{$document->title}}
                                    @endif
                                </b>
                                <p class="text-medium line-height-25 text-medium-gray mb-2">
                                    @if(strlen($document->description)>100)
                                        {{substr($document->description, 0, 99)}}...
                                    @else
                                        {{$document->description}}
                                    @endif
                                </p>
                                <form action="{{route('document.download')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$document->id}}" class="form-control">
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

                            </div>
                        </div>
                    </div>
                @endforeach
                {{$documents->links()}}
            @else
                <p>Sorry No data Found</p>
            @endif
        </div>
    </section>
@endsection

@push('js')
    <script>
        $(document).ready(function () {
            $('select[name="category_id"]').on('change', function () {
                var catID = $(this).val();
                if (catID) {
                    $.ajax({
                        url: '/subcategory/' + catID,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('select[name="subcategory_id"]').empty();
                            $('select[name="subcategory_id"]').append('<option value="">--Select Subcategory</option>');
                            $.each(data, function (key, value) {
                                $('select[name="subcategory_id"]').append('<option value="' + value.id + '">' + value.name + '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="subcategory_id"]').empty();
                    $('select[name="subcategory_id"]').append('<option value="">--Select Subcategory</option>');

                }
            });
        });
    </script>
@endpush


