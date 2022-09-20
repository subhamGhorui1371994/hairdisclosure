@extends('layouts.template')
@section('title', 'About Us')
@section('sub-title', '')
@section('content')

    <!-- About Us -->
    <section class="about-us alternate">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>About Us</h2>
                        </div>
                        <div class="text">Our goal is to make our customers happy and confident with how they look in our
                            wigs.
                            As one of the world’s coveted truths state, “the more, the merrier”.
                            The wig-makers at It’s A Wig target a very wide range of customers and demographics.</div>

                        <div class="message">Save time, Save money, With High Quality <br> Satisfied Service,
                            <span>Purchase </span>
                        </div>

                        <div class="link-box">
                            <a href="{{ url('about-us') }}" class="theme-btn btn-style-two">Contact Us</a>
                            <a href="{{ url('#') }}" class="theme-btn call-btn"><i class="icon la la-phone"></i> + 62
                                867 6872</a>
                        </div>
                    </div>
                </div>

                <!-- Video Column -->
                <div class="video-column col-lg-6 col-md-12 col-sm-12 wow fadeIn">
                    <div class="inner-column">
                        <div class="float-text">High Quality Wigs</div>
                        <figure class="image"><img src="assets/images/resource/wiggirl4.png" alt=""></figure>
                        <div class="link-box"><a href="#" class="link" data-fancybox="gallery" data-caption=""><span
                                    class="icon la la-play"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us -->

    <!--Fluid Section One-->
    <section class="fluid-section-one">
        <div class="outer-container clearfix">
            <!--Content Column-->
            <div class="content-column">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2>Why Choose US</h2>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block">
                        <div class="inner-box">
                            <span class="icon la la-smile-o"></span>
                            <h5><a href="{{ url('services') }}">Fashion Conscious Designs</a></h5>
                            <div class="text">We are proud to design our products ourselves; our specialist designers are
                                always designing our new releases!</div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block">
                        <div class="inner-box">
                            <span class="icon la la-group"></span>
                            <h5><a href="{{ url('services') }}">Customer first</a></h5>
                            <div class="text">Our customers are our very essence, after all we wouldn’t be here without
                                you! Therefore, we always put the needs and requirements of a customer ahead of anything and
                                everything.
                            </div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block">
                        <div class="inner-box">
                            <span class="icon la la-paint-brush"></span>
                            <h5><a href="{{ url('services') }}">Customization Service</a></h5>
                            <div class="text">We are extremely proud to offer our unique customization service! Whether
                                you want your old hair back or you can’t find the exact style you’re looking for," COMPANY
                                NAME"
                                can make it uniquely designed for you.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Image Column-->
            <div class="image-column wow fadeIn" style="background-image:url(assets/images/my-images/about-page/man-wig.jpg);">
                <figure class="image-box"><img src="assets/images/resource/image-1.jpg" alt=""></figure>
            </div>
        </div>
    </section>
    <!-- End Fluid Section -->

    <!-- Process Section -->
    {{-- <section class="process-section alternate">
        <div class="auto-container">
            <div class="row">
                <!-- Process Block -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon la la-wrench"></span></div>
                        <h4>Technical Staff</h4>
                        <div class="text">Sed perspiciatis unde omnis iste natus error sit voluptatem accusa ntium
                            dolore mque </div>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon la la-unlock-alt"></span></div>
                        <h4>Quick Repair Process</h4>
                        <div class="text">Sed perspiciatis unde omnis iste natus error sit voluptatem accusa ntium
                            dolore mque </div>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon la la-plane"></span></div>
                        <h4>On Time Delivery</h4>
                        <div class="text">Sed perspiciatis unde omnis iste natus error sit voluptatem accusa ntium
                            dolore mque </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--End Process Section -->

    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2> Our Professional Stylists</h2>
            </div>

            <div class="row">
                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/team-1.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <a href="{{ url('team') }}" class="icon"><span class="la la-phone"></span></a>
                                <ul class="social-links">
                                    <li><a href="{{ url('#') }}"><i class="la la-facebook"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-twitter"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-google-plus"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-dribbble"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="{{ url('team') }}">Roban Kosata</a></h4>
                            <span class="designation">Computer Hardwere Enginer</span>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/team-2.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <a href="{{ url('team') }}" class="icon"><span class="la la-phone"></span></a>
                                <ul class="social-links">
                                    <li><a href="{{ url('#') }}"><i class="la la-facebook"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-twitter"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-google-plus"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-dribbble"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="{{ url('team') }}">Moneib Rabora</a></h4>
                            <span class="designation">Mobile Phone Hardwere Enginer</span>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/team-3.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <a href="{{ url('team') }}" class="icon"><span class="la la-phone"></span></a>
                                <ul class="social-links">
                                    <li><a href="{{ url('#') }}"><i class="la la-facebook"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-twitter"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-google-plus"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-dribbble"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="{{ url('team') }}">Kartian Monaja</a></h4>
                            <span class="designation">Computer Hardwere Enginer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Team Section -->
@endsection
