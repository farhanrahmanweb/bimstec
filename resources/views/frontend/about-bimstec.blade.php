@extends('layouts.frontend.app')
@section('title', 'Home- Bay of Bengal Initiative for Multi-Sectoral Technical and Economic Cooperation')
@section('content')
        <!-- start page title section -->
        <section id="page_title" class="wow fadeIn cover-background background-position-center top-space" style="background-image:url({{asset('frontend/images/about-banner.jpg')}});">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 d-flex flex-column text-center justify-content-center page-title-large padding-30px-tb">
                        <!-- start page title -->
                        <h1 class="alt-font text-white font-weight-600 mb-0">About BIMSTEC</h1>
                        <!-- start breadcrumb -->
                        <div class="breadcrumb">
                            <ul class="text-center text-white text-md-right">
                                <li><a href="index.php">Home</a></li>
                                <li>About BIMSTEC</li>
                            </ul>
                        </div>
                        <!-- end breadcrumb -->
                        <!-- end page title -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->

        <!-- Info Section -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h6 class="alt-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase">Setting</h6>
                        <p>The Bay of Bengal Initiative for Multi-Sectoral Technical and Economic Cooperation (BIMSTEC) is a regional organization comprising seven Member States lying in the littoral
                            and adjacent areas of the Bay of Bengal constituting a contiguous regional unity. This sub-regional organization came into being on 6 June 1997 through the Bangkok
                            Declaration. It constitutes seven Member States: five deriving from South Asia, including Bangladesh, Bhutan, India, Nepal, Sri Lanka, and two from Southeast Asia,
                            including Myanmar and Thailand. Initially, the economic bloc was formed with four Member States with the acronym ‘BIST-EC’ (Bangladesh, India, Sri Lanka and Thailand
                            Economic Cooperation). Following the inclusion of Myanmar on 22 December 1997 during a special Ministerial Meeting in Bangkok, the Group was renamed ‘BIMST-EC’ (Bangladesh,
                            India, Myanmar, Sri Lanka and Thailand Economic Cooperation). With the admission of Nepal and Bhutan at the 6th Ministerial Meeting (February 2004, Thailand), the name of
                            the grouping was changed to ‘Bay of Bengal Initiative for Multi-Sectoral Technical and Economic Cooperation’ (BIMSTEC). The regional group constitutes a bridge between
                            South and South East Asia and represents a reinforcement of relations among these countries. BIMSTEC has also established a platform for intra-regional cooperation between
                            SAARC and ASEAN members. The BIMSTEC region is home to around 1.5 billion people which constitute around 22% of the global population with a combined gross domestic product
                            (GDP) of 2.7 trillion economy. In the last five years, BIMSTEC Member States have been able to sustain an average 6.5% economic growth trajectory despite global financial
                            meltdown.</p>
                    </div>
                </div>
                <div class="row align-items-center p-5">
                    <div class="col-12 col-md-6 sm-margin-30px-bottom p-5">
                        <img class="w-100" src="{{asset('frontend/images/Bay_of_Bengal_map.png')}}" alt="">
                    </div>
                    <div class="col-12 col-md-6">
                        <h6 class="alt-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase">Bay of Bengal</h6>
                        <p>The objective of building such an alliance was to harness shared and accelerated growth through mutual cooperation in different areas of common interests by mitigating the
                            onslaught of globalization and by utilizing regional resources and geographical advantages. Unlike many other regional groupings, BIMSTEC is a sector-driven cooperative
                            organization. Starting with six sectors—including trade, technology, energy, transport, tourism and fisheries—for sectoral cooperation in the late 1997, it expanded to
                            embrace nine more sectors—including agriculture, public health, poverty alleviation, counter-terrorism, environment, culture, people to people contact and climate change—in
                            2008.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Info Section -->
@endsection

