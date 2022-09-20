@extends('layouts.template')
@section('title', 'Pricing')
@section('sub-title', '')
@section('content')

    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Pricing Table</h2>
            </div>
            <div class="row">
                <!-- Pricing Table -->
                <div class="pricing-table col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-computer"></span></div>
                        <h4>Desktop Repair</h4>
                        <div class="price-box">
                            <span>Start Price</span>
                            <h3>$ 25.00</h3>
                        </div>
                        <div class="text"> Service Cost Depends on Your Device Problem Lorem Ipsum Text</div>
                        <div class="btn-box">
                            <a href="{{url('contact-us')}}" class="theme-btn btn-style-two">Get Started</a>
                        </div>
                    </div>
                </div>

                <!-- Pricing Table -->
                <div class="pricing-table col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-tablet-1"></span></div>
                        <h4>iPad/Tablet Repair</h4>
                        <div class="price-box">
                            <span>Start Price</span>
                            <h3>$ 35.00</h3>
                        </div>
                        <div class="text"> Service Cost Depends on Your Device Problem Lorem Ipsum Text</div>
                        <div class="btn-box">
                            <a href="{{url('contact-us')}}" class="theme-btn btn-style-two">Get Started</a>
                        </div>
                    </div>
                </div>

                <!-- Pricing Table -->
                <div class="pricing-table col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-laptop-3"></span></div>
                        <h4>Laptop Repair</h4>
                        <div class="price-box">
                            <span>Start Price</span>
                            <h3>$ 40.00</h3>
                        </div>
                        <div class="text"> Service Cost Depends on Your Device Problem Lorem Ipsum Text</div>
                        <div class="btn-box">
                            <a href="{{url('contact-us')}}" class="theme-btn btn-style-two">Get Started</a>
                        </div>
                    </div>
                </div>

                <!-- Pricing Table -->
                <div class="pricing-table col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-phone-case"></span></div>
                        <h4>Mobile Repair</h4>
                        <div class="price-box">
                            <span>Start Price</span>
                            <h3>$ 10.00</h3>
                        </div>
                        <div class="text"> Service Cost Depends on Your Device Problem Lorem Ipsum Text</div>
                        <div class="btn-box">
                            <a href="{{url('contact-us')}}" class="theme-btn btn-style-two">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Pricing Section -->

    <!-- Process Section -->
    <section class="process-section" style="background-color: #80808057;">
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
    </section>
    <!--End Process Section -->
@endsection
