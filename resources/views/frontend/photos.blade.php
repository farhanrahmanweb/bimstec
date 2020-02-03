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
                    <h1 class="alt-font text-white font-weight-600 mb-0">Image Gallery</h1>
                    <!-- start breadcrumb -->
                    <div class="breadcrumb">
                        <ul class="text-center text-white text-md-right">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li>Image Gallery</li>
                        </ul>
                    </div>
                    <!-- end breadcrumb -->
                    <!-- end page title -->
                </div>
            </div>
        </div>
    </section>
    <!-- end page title section -->

    <!-- start tab style 02 section -->
    <section class="wow fadeIn bg-light-gray">
        <div class="container">
            <div class="row">
                @foreach($gallerys as $key=>$gallery)
                    <div class="col-sm-3">
                        <div class="card">
                            <a href="{{route('photos.mores', $gallery->id)}}">
                                <img class="card-img-top" src="{{asset('storage/photo/thumbnail/'. $gallery->photos[0]->image)}}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text text-truncate">{{$gallery->title}}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row mt-5 float-right">
                {{$gallerys->links()}}
            </div>
        </div>
    </section>
    <!-- end tab style 02 section -->
@endsection
