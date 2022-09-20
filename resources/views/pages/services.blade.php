@extends('layouts.template')
@section('title', 'Services')
@section('sub-title', '')
@section('content')

    <!-- Services Section -->
    <section class="services-section-two alternate">
        <div class="auto-container">
            <div class="row">
                <!-- Service Block -->
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/service-1.jpg" alt=""></figure>
                            <div class="overlay-box"><a href="{{url('service-detail')}}" class="read-more">Read More</a></div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{url('service-detail')}}">Smart Phone Repair</a></h4>
                            <div class="text">We specialise in Phone repairs for Apple iPhones, iPad, iPod, Samsung,
                                Galaxy, Sony, HTC, Nexus, Motorola, Blackberry & ...</div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/service-2.jpg" alt=""></figure>
                            <div class="overlay-box"><a href="{{url('service-detail')}}" class="read-more">Read More</a></div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{url('service-detail')}}"> MAC Repair</a></h4>
                            <div class="text">We specialise in Phone repairs for Apple iPhones, iPad, iPod, Samsung,
                                Galaxy, Sony, HTC, Nexus, Motorola, Blackberry & ...</div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/service-3.jpg" alt=""></figure>
                            <div class="overlay-box"><a href="{{url('service-detail')}}" class="read-more">Read More</a></div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{url('service-detail')}}">Tablets & IPAD Repair</a></h4>
                            <div class="text">We specialise in Phone repairs for Apple iPhones, iPad, iPod, Samsung,
                                Galaxy, Sony, HTC, Nexus, Motorola, Blackberry & ...</div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/service-4.jpg" alt=""></figure>
                            <div class="overlay-box"><a href="{{url('service-detail')}}" class="read-more">Read More</a></div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{url('service-detail')}}">Game Console Repair</a></h4>
                            <div class="text">We specialise in Phone repairs for Apple iPhones, iPad, iPod, Samsung,
                                Galaxy, Sony, HTC, Nexus, Motorola, Blackberry & ...</div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/service-5.jpg" alt=""></figure>
                            <div class="overlay-box"><a href="{{url('service-detail')}}" class="read-more">Read More</a></div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{url('service-detail')}}">Desktop Repair</a></h4>
                            <div class="text">We specialise in Phone repairs for Apple iPhones, iPad, iPod, Samsung,
                                Galaxy, Sony, HTC, Nexus, Motorola, Blackberry & ...</div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/service-6.jpg" alt=""></figure>
                            <div class="overlay-box"><a href="{{url('service-detail')}}" class="read-more">Read More</a></div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{url('service-detail')}}">Printers Repair</a></h4>
                            <div class="text">We specialise in Phone repairs for Apple iPhones, iPad, iPod, Samsung,
                                Galaxy, Sony, HTC, Nexus, Motorola, Blackberry & ...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section -->
@endsection
