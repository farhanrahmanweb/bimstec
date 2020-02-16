@extends('layouts.backend.app')
@section('title', 'Dashboard')
@section('content')
    <section class="py-5">
        <div class="row">
            <a href="{{route('admin.event.index')}}" class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                    <div class="flex-grow-1 d-flex align-items-center">
                        <div class="dot mr-3 bg-violet"></div>
                        <div class="text">
                            <h6 class="mb-0">Events</h6><span class="text-gray">{{$events}}</span>
                        </div>
                    </div>
                    <div class="icon text-white bg-violet"><i class="fas fa-server"></i></div>
                </div>
            </a>
            <a href="{{route('admin.document.index')}}" class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                    <div class="flex-grow-1 d-flex align-items-center">
                        <div class="dot mr-3 bg-green"></div>
                        <div class="text">
                            <h6 class="mb-0">Documents</h6><span class="text-gray">{{$documents}}</span>
                        </div>
                    </div>
                    <div class="icon text-white bg-green"><i class="far fa-clipboard"></i></div>
                </div>
            </a>
            <a href="{{route('admin.gallery.index')}}" class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                    <div class="flex-grow-1 d-flex align-items-center">
                        <div class="dot mr-3 bg-blue"></div>
                        <div class="text">
                            <h6 class="mb-0">Galleries</h6><span class="text-gray">{{$galleries}}</span>
                        </div>
                    </div>
                    <div class="icon text-white bg-blue"><i class="fa fa-dolly-flatbed"></i></div>
                </div>
            </a>
            <a href="{{route('admin.video.index')}}" class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                    <div class="flex-grow-1 d-flex align-items-center">
                        <div class="dot mr-3 bg-red"></div>
                        <div class="text">
                            <h6 class="mb-0">Videos</h6><span class="text-gray">{{$videos}}</span>
                        </div>
                    </div>
                    <div class="icon text-white bg-red"><i class="fas fa-receipt"></i></div>
                </div>
            </a>
        </div>
    </section>
@endsection
