@extends('layouts.template')
@section('title', 'Service Detail')
@section('sub-title', '')
@section('content')

    <!-- Service Detail Section -->
    <div class="service-detail-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side order-last col-xl-9 col-lg-8 col-md-12 col-sm-12">
                    <div class="service-detail">
                        <!-- Image Box -->
                        <div class="image-box wow fadeIn"><img src="assets/images/resource/service-detail.jpg" alt="">
                        </div>

                        <div class="lower-content">
                            <h2>Tablet Repair Diagnosis</h2>
                            <p>Our trained technicians will test and accurately diagnose the Tablet Repair issue
                                first, making sure to replace only the parts that are causing the problem. We won't
                                make you pay for something you don't need! Then, once the repairs are made, we will
                                test your device again to make sure it's working properly before you leave the
                                store.</p>
                            <h3>Performance Guarantee</h3>
                            <p>Like in everything we do, you can expect the same superior service when we repair
                                your smartphone, tablet or MP3 player. Backed by our extensive 6-month warranty on
                                parts and workmanship, our skilled technicians will handle your broken device with
                                precision and care; that's the Batteries Plus Bulbs way!</p>
                            <h3>Top Quality Service</h3>
                            <p>At Batteries Plus Bulbs, you can always expect quality products and outstanding
                                service. As experts in constantly evolving mobile technologies, we have made it our
                                business to offer Tablet Repair repair services for the top mobile device brands.
                                Our teams are fully trained to install replacement batteries in these smartphones,
                                tablets and MP3 players, along with repairing or replacing screens, buttons, ports
                                and components.</p>
                            <div class="two-column">
                                <div class="row clearfix">
                                    <div class="info-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                        <h3>We Fix It</h3>
                                        <p>Bring in your smartphone or tablet and we can repair cracked screens,
                                            buttons, built in cameras, charge ports, speakers, headphone jacks, and
                                            more. We install new batteries and can even install a screen protector
                                            to keep your Tablet Repair device safe from future damage. Visit your
                                            nearest store today.</p>
                                    </div>

                                    <div class="image-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                        <div class="image wow fadeIn"><a href="assets/images/resource/image-3.jpg"
                                                class="lightbox-image"><img src="assets/images/resource/image-3.jpg"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Service Detail -->
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar services-sidebar">

                        <!-- Services Cat List -->
                        <div class="sidebar-widget categories">
                            <ul class="services--list">
                                <li class="active"><a href="{{url('service-detail')}}">Desktop Repair</a></li>
                                <li><a href="{{url('service-detail')}}">Printers Repair</a></li>
                                <li><a href="{{url('service-detail')}}">Tablets / IPAD Repair</a></li>
                                <li><a href="{{url('service-detail')}}">Smart Phone Repair</a></li>
                                <li><a href="{{url('service-detail')}}">Laptop / MAC Repair</a></li>
                                <li><a href="{{url('service-detail')}}">Game Console Repair</a></li>
                            </ul>
                        </div>

                        <!-- Brochure -->
                        <div class="sidebar-widget brochure">
                            <div class="brochure-box">
                                <span>Quick Contact</span>
                                <h4>Get Solution</h4>
                                <p>Contact us at the Constration office nearest to you or submit a business inquiry
                                    online.</p>
                                <a href="{{url('contact-us')}}" class="theme-btn btn-style-one">Contact</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Detail Section -->
@endsection
