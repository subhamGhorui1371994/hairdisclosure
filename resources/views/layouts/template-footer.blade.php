<!-- Main Footer -->
{{-- <footer class="main-footer" style="background-image: url(assets/images/background/3.jpg);"> --}}
<footer class="main-footer">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row">
                <!--Big Column-->
                <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <!--Footer Column-->
                        <div class="footer-column col-xl-8 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget about-widget">
                                <div class="footer-logo">
                                    <figure>
                                        <a href="{{url('/')}}"><img src="{{url('assets/images/my-images/logos/footer-logo.png')}}" alt=""></a>
                                    </figure>
                                </div>

                                <div class="widget-content">
                                    <div class="text">
                                       {{--  --}}
                                    </div>
                                    <ul class="social-icon-two">
                                        <li>Follow Us:</li>
                                        <li><a href="{{url('#')}}"><i class="la la-facebook"></i></a></li>
                                        <li><a href="{{url('#')}}"><i class="la la-twitter"></i></a></li>
                                        <li><a href="{{url('#')}}"><i class="la la-linkedin"></i></a></li>
                                        <li><a href="{{url('#')}}"><i class="la la-google-plus"></i></a></li>
                                        <li><a href="{{url('#')}}"><i class="la la-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h2 class="widget-title">Our Services</h2>
                                <div class="widget-content">
                                    <ul class="list">
                                        {{-- <li><a href="service">Smart Phone Repair</a></li>
                                        <li><a href="service">Desktop & Laptop</a></li>
                                        <li><a href="service">Tablets & iPad Repair</a></li>
                                        <li><a href="service">Desktop & Laptop</a></li>
                                        <li><a href="service">LCD & LED TV Repair</a></li>
                                        <li><a href="service">MP3 & MP4 Player</a></li> --}}
                                        @if ($products)
                                            @foreach ($products as $id => $product)
                                                <li><a href="{{ url('products-detail/' . $id) }}">{{ $product }}</a></li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Big Column-->
                <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="row clearfix">
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <!--Footer Column-->
                            <div class="footer-widget recent-posts">
                                <h2 class="widget-title">Recent Posts</h2>
                                <!--Footer Column-->
                                <div class="widget-content">
                                    <div class="post">
                                        <div class="thumb"><a href="{{url('blog-detail')}}"><img
                                                    src="assets/images/resource/post-thumb-1.jpg" alt=""></a>
                                        </div>
                                        <h4><a href="{{url('blog-detail')}}">The Summer Sppecial Day Out</a></h4>
                                        <a href="{{url('blog-detail')}}" class="read-more">Read More</a>
                                    </div>

                                    <div class="post">
                                        <div class="thumb"><a href="{{url('blog-detail')}}"><img
                                                    src="assets/images/resource/post-thumb-2.jpg" alt=""></a>
                                        </div>
                                        <h4><a href="{{url('blog-detail')}}">Drop & Drug Your Tagline Here</a>
                                        </h4>
                                        <a href="{{url('blog-detail')}}" class="read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget contact-widget">
                                <h2 class="widget-title">Get in Touch</h2>
                                <div class="widget-content">
                                    <ul class="contact-list">
                                        <li><span class="la la-map-marker"></span>
                                            {{ env('OFFICE_ADDRESS', '69, Kankurgachhi 2nd Lane, Kolkata-700054, Near Great Eastren.') }}</li>
                                        {{-- <li><span class="la la-envelope"></span><a
                                                href="{{url('#')}}">business@support.com</a></li> --}}
                                        <li><span class="la la-phone"></span>
                                            {{ env('OFFICE_PHONE', '8777036806') }}</li>
                                    </ul>

                                    <div class="subscribe-form">
                                        <form method="post" action="blog">
                                            <div class="form-group">
                                                <input type="email" name="email" value=""
                                                    placeholder="Your Email" required="">
                                                <button type="submit"><span
                                                        class="icon la la-paper-plane"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom" style="border-top: 2px solid black">
        <div class="auto-container">
            <div class="inner-container clearfix">
                {{-- <div class="footer-nav">
                    <ul class="clearfix">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('about-us')}}">About Us</a></li>
                        <li><a href="{{url('services')}}">Services</a></li>
                        <li><a href="{{url('gallery')}}">Gallery</a></li>
                        <li><a href="{{url('blog')}}">Blog</a></li>
                        <li><a href="{{url('contact-us')}}">Contact</a></li>
                    </ul>
                </div> --}}

                <div class="copyright-text">
                    <p class="">Copyright © <a href="{{url('/')}}">Adjust for</a> 2018. All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Main Footer -->
