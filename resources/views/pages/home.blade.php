@extends('layouts.template')
@section('title', 'Home')
@section('sub-title', '')
@section('bread-crumb')
@endsection
@section('content')

    <!--Main Slider-->
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>


                    <!-- Slide 2 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default"
                        data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1=""
                        data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off"
                        data-slotamount="default" data-thumb="assets/images/my-images/main-slider/slide-1.jpg"
                        data-title="Slide Title" data-transition="parallaxvertical">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                            data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                            src="assets/images/my-images/main-slider/slide-1.jpg">

                        {{-- <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-whitespace="nowrap"
                            data-width="['570','570','570','570']" data-text-align="center"
                            data-hoffset="['0','0','15','15']" data-voffset="['-115','-115','-95','-145']"
                            data-x="['right','right','left','left']" data-y="['middle','middle','middle','middle']"
                            data-frames='[{"delay":0,"split":"chars","splitdelay":0.05,"speed":2000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <h2>We Will Replace <br>Quality Accessories</h2>
                        </div> --}}

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-text-align="center" data-whitespace="normal"
                            data-width="['570','570','690','570']" data-hoffset="['0','0','15','15']"
                            data-voffset="['40','40','40','20']" data-x="['right','right','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2 style="color: white;font-size: 50px">
                                Front Lace, Full Lace<br>
                                & Hand Making Style.
                            </h2>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-whitespace="nowrap"
                            data-width="['570','570','570','570']" data-hoffset="['0','0','15','15']"
                            data-voffset="['155','155','155','155']" data-x="['right','right','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="btn-box">
                                <a href="{{ url('products') }}" class="theme-btn btn-style-one"><span>Shop
                                        Now</span></a>
                                <a href="content" class="theme-btn btn-style-two"><span>Contact us</span></a>
                            </div>
                        </div>
                    </li>

                    <!-- Slide 1 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default"
                        data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1=""
                        data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off"
                        data-slotamount="default" data-thumb="assets/images/my-images/main-slider/slide-2.jpg"
                        data-title="Slide Title" data-transition="parallaxvertical">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                            data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                            src="assets/images/my-images/main-slider/slide-2.jpg">

                        {{-- <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-whitespace="nowrap"
                            data-width="['570','570','570','570']" data-text-align="center"
                            data-hoffset="['0','0','15','15']" data-voffset="['-115','-115','-95','-145']"
                            data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                            data-frames='[{"delay":0,"split":"chars","splitdelay":0.05,"speed":2000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <h2 style="color: white">Well to Adjust For <br>Quickly Repair</h2>
                        </div> --}}

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-text-align="center" data-whitespace="normal"
                            data-width="['570','570','690','570']" data-hoffset="['0','0','15','15']"
                            data-voffset="['40','40','40','20']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2 style="color: white;font-size: 50px">
                                Perfect and Modern Hair Wigs...
                            </h2>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-whitespace="nowrap"
                            data-width="['570','570','570','570']" data-hoffset="['0','0','15','15']"
                            data-voffset="['155','155','155','155']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="btn-box">
                                <a href="{{ url('products') }}" class="theme-btn btn-style-one"><span>Shop
                                        Now</span></a>
                                <a href="content" class="theme-btn btn-style-two"><span>Contact us</span></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="arrow-down scroll-to-target" data-target="#about-us"><span class="icon-arrows"></span>
            </div>
        </div>
        {{-- <div class="link-box">
            <a class="theme-btn btn-style-two" href="https://api.whatsapp.com/send?phone=918777036806&text=Hello Hair Disclosure, I want a wig."><i class="fa fa-whatsapp" style="font-size: 26px; color:green"></i></a>
        </div> --}}
    </section>
    <!--End Main Slider-->

    <!-- Services Section -->
    <section class="services-section-two">
        <div class="auto-container">

            <div class="sec-title text-center">
                <h2>Our Products</h2>
            </div>

            <div class="services-carousel owl-carousel owl-theme">
                @if ($allProducts)
                    @foreach ($allProducts as $key => $product)
                        <!-- Service Block -->
                        <div class="service-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img
                                            src="{{ URL::asset(checkAndRenderImage($product['display_image'], 'assets/images/resource/service-2.jpg')) }}"
                                            alt="" style="height: 300px;width: 280px">
                                    </figure>
                                    <div class="overlay-box"><a href="{{ url('products-detail/' . $product['id']) }}"
                                            class="read-more">Read More...</a></div>
                                </div>
                                <div class="lower-content">
                                    <h4><a href={{ url('products-detail/' . $product['id']) }}>{{ $product['title'] }}</a>
                                    </h4>
                                    <div class="text">{!! html_entity_decode($product['small_description']) !!}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!--End Services Section -->

    <!-- Call Back Section -->
    <section class="call-back-section" style="background-image: url(assets/images/my-images/background/hair1.jpg);">
        <div class="outer-box">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="content-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="content">
                                <h3>What type of wig do you need?</h3>
                                <div class="text">We have almost every type of wigs available here.<br />Please Contact
                                    Us on This Number
                                    at <span> {{ env('OFFICE_PHONE', '8777036806') }}</span>.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Column -->
                    <div class="form-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="appointment-form">
                                <div class="title-box">
                                    <h3>Make An Appointment</h3>
                                </div>

                                {{-- <form method="post" action="index"> --}}
                                {{ Form::open(['url' => url('submit-appointment-form'), 'id' => 'appointment-form']) }}
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="name" placeholder="Your Name"
                                            value="{{ old('name') }}">
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="tel" name="phone" placeholder="Telephone"
                                            value="{{ old('phone') }}">
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <input type="email" name="email" placeholder="E-mail Address"
                                            value="{{ old('emial') }}">
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="subject" placeholder="Subject"
                                            value="{{ old('subject') }}">
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="date" name="date" placeholder="Date"
                                            value="{{ old('date') }}">
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="time" name="time" placeholder="Time"
                                            value="{{ old('time') }}">
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <textarea name="message" placeholder="Problem in Detail" value="{{ old('message') }}"></textarea>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <button class="theme-btn btn-style-two" type="submit" name="submit-form">Send
                                            Request</button>
                                    </div>
                                </div>
                                {{-- </form> --}}
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {!! showMessage() !!}
    <!--End Call Back Section -->
@endsection
@section('script')
    <script src={{ url('assets/js/jquery.validate.min.js') }}></script>

    <script>
        $(document).ready(function() {
            $("#appointment-form").validate({
                rules: {
                    name: "required",
                    phone: {
                        required: true,
                        maxlength: 10,
                    },
                    email: "required",
                    date: "required",
                    time: "required",
                    subject: "required",
                    // message: "required",
                },
                messages: {
                    name: {
                        required: "The Name Field is required",
                        maxlength: "The Name cannot be more than 30 characters"
                    },
                    email: {
                        required: "Email Field is required",
                        email: "Email must be a valid email address",
                        maxlength: "Email cannot be more than 50 characters",
                    },
                    subject: {
                        required: "The Subject Field is required",
                    },
                }
            });
        });
    </script>
@endsection
