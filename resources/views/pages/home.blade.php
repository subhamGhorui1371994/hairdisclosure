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
                                {{-- <a href="{{ url('products') }}" class="theme-btn btn-style-one"><span>Shop
                                        Now</span></a> --}}
                                <a href="contact-us" class="theme-btn btn-style-two"><span>Contact us</span></a>
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
                                {{-- <a href="{{ url('products') }}" class="theme-btn btn-style-one"><span>Shop
                                        Now</span></a> --}}
                                <a href="contact-us" class="theme-btn btn-style-two"><span>Contact us</span></a>
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
                                            alt="" style="height: 300px;width: 370px">
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

    <!-- Projects Section -->
    <section class="projects-section alternate">
        <div class="outer-container">
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                <!--Filter-->
                <div class="filters text-center clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">All Style Wig</li>
                        <li class="filter" data-role="button" data-filter=".female">Female Type</li>
                        <li class="filter" data-role="button" data-filter=".male">Male Type</li>
                        <li class="filter" data-role="button" data-filter=".classic">Classic Type</li>
                        <li class="filter" data-role="button" data-filter=".expensive">Expensive</li>
                    </ul>
                </div>
                <div class="filter-list row no-gutters">
                    <!-- Project item -->
                    <div class="project-item all mix male expensive col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img style="height: 220px;" src="assets/images/gallery/1.jpg"
                                    alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Male Type</a></h3>
                                    <div class="category">Catagory : Expensive</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/gimg1.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix male classic col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img style="height: 220px;" src="assets/images/gallery/2.jpg"
                                    alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Male Type</a></h3>
                                    <div class="category">Catagory : Classic</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/gim2.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix female expencive classic col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img style="height: 220px;" src="assets/images/gallery/gimg7.jpg"
                                    alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Female Type</a></h3>
                                    <div class="category">Catagory :Both(Expensive Classic)</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/gimg7.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Project item -->
                    <div class="project-item all mix male expensive col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img style="height: 220px;" src="assets/images/gallery/4.jpg"
                                    alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Male Type</a></h3>
                                    <div class="category">Catagory : Expensive</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/gim4.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix male expensive col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img style="height: 220px;" src="assets/images/gallery/5.png"
                                    alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Male Type</a></h3>
                                    <div class="category">Catagory : Expensive</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/gimg5.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix male classic col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img style="height: 220px;" src="assets/images/gallery/6.jpg"
                                    alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Male Type</a></h3>
                                    <div class="category">Catagory : Classic</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/gimg6.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix male expensive classic col-xl-3 laptop col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img style="height: 220px;" src="assets/images/gallery/7.jpg"
                                    alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Male Type</a></h3>
                                    <div class="category">Catagory : Both(Expensive Classic)</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/gim11.png" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix male classic col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img style="height: 220px;" src="assets/images/gallery/gim5.jpg"
                                    alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Male Type</a></h3>
                                    <div class="category">Catagory : Classic</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/gim5.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix male expencive Classic col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img style="height: 220px;" src="assets/images/gallery/gimg9.jpg"
                                    alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Male Type</a></h3>
                                    <div class="category">Catagory : Both(Expensive Classic)</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/gimg9.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix tablet female classic col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img style="height: 220px;" src="assets/images/gallery/gimg10.png"
                                    alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Female Type</a></h3>
                                    <div class="category">Catagory : Classic</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/gimg10.png" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix female expencive col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img style="height: 220px;" src="assets/images/gallery/gimg11.jpg"
                                    alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Female Type</a></h3>
                                    <div class="category">Catagory : Expensive</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/gimg11.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix female expencive classic col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img style="height: 220px;" src="assets/images/gallery/gimg12.jpg"
                                    alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Female Type</a></h3>
                                    <div class="category">Catagory :Both(Expensive Classic)</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/gimg12.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn-box text-center">
                <a href="gallery" class="theme-btn btn-style-two">More View</a>
            </div>
        </div>
    </section>
    <!--End Projects Section -->

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

                                    {{-- <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="time" name="time" placeholder="Time"
                                            value="{{ old('time') }}">
                                    </div> --}}

                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <select name="time" id="time">
                                            <option value="">Select Time Slot</option>
                                            @foreach ($time_slots as $time_slot)
                                                <option value="{{ $time_slot }}">{{ $time_slot }}</option>
                                            @endforeach
                                        </select>
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
