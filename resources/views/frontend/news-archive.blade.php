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
                    <h1 class="alt-font text-white font-weight-600 mb-0">Archive News</h1>
                    <!-- start breadcrumb -->
                    <div class="breadcrumb">
                        <ul class="text-center text-white text-md-right">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li>BIMSTEC News</li>
                        </ul>
                    </div>
                    <!-- end breadcrumb -->
                    <!-- end page title -->
                </div>
            </div>
        </div>
    </section>
    <!-- end page title section -->
    <!-- start blog content section -->
    <section id="archive_page">
        <div class="container">
            <div class="row">
                <main class="col-12 col-lg-12 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom md-padding-15px-lr">
                    <!-- start post item -->
                    @foreach($archivenewses as $key=>$news)
                        <div class="blog-post-content d-flex align-items-center flex-wrap margin-60px-bottom padding-60px-bottom border-bottom border-color-extra-light-gray md-margin-30px-bottom md-padding-30px-bottom text-center text-md-left md-no-border">
                            <div class="col-12 col-lg-5 blog-image p-0 md-margin-30px-bottom sm-margin-20px-bottom margin-45px-right md-no-margin-right">
                                <a href="{{$news->news_link}}" target="_blank"><img src="{{asset('storage/news/'.$news->image)}}" alt=""></a>
                            </div>
                            <div class="col-12 col-lg-6 blog-text p-0">
                                <div class="content margin-20px-bottom md-no-padding-left ">
                                    <a href="{{$news->news_link}}" target="_blank" class="text-extra-dark-gray margin-15px-bottom alt-font text-extra-large font-weight-600 d-inline-block">{{$news->title}}</a>

                                    <p class="m-0 width-95">{!! \Illuminate\Support\Str::substr($news->description, 0, 150 )!!}..</p>
                                </div>
                                <a class="btn btn-very-small btn-dark-gray text-uppercase" href="{{$news->news_link}}" target="_blank">Continue Reading</a>
                            </div>
                        </div>
                    @endforeach
                    <!-- end post item -->

                    <!-- start pagination -->
                    <div class="col-12 text-center margin-100px-top md-margin-50px-top position-relative wow fadeInUp">
                        <div class="text-small text-uppercase text-extra-dark-gray">
                            <ul class="mx-auto">
                                {{$archivenewses->links()}}
                            </ul>
                        </div>
                    </div>
                    <!-- end pagination -->
                </main>
            </div>
        </div>
    </section>
    <!-- end blog content section -->
@endsection


