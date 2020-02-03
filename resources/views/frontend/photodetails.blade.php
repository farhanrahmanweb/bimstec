@extends('layouts.frontend.app')
@section('title', 'Home- Bay of Bengal Initiative for Multi-Sectoral Technical and Economic Cooperation')
@section('content')
    <!-- start page title section -->
    <section id="page_title" class="wow fadeIn cover-background background-position-center top-space" style="background-image:url({{asset('storage/photo/'. $photos[0]->image)}});">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 d-flex flex-column text-center justify-content-center page-title-large padding-30px-tb">
                    <!-- start page title -->
                    <h1 class="alt-font text-white font-weight-600 mb-0">{{$photos[0]->gallery->title}}</h1>
                    <!-- end page title -->
                </div>
            </div>
        </div>
    </section>
    <!-- end page title section -->

    <!-- start tab style 02 section -->
    <section class="wow fadeIn bg-light-gray">
        <div class="container">
            <div class="row lightbox-gallery">
                @foreach($photos as $key=>$photo)
                    <div class="col-sm-3">
                        <div class="card">
                            <a href="{{asset('storage/photo/'. $photo->image)}}">
                                <img class="card-img-top" src="{{asset('storage/photo/thumbnail/'. $photo->image)}}" alt="Card image cap">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end tab style 02 section -->
@endsection
