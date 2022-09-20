        <!-- Main Header-->
        <header class="main-header header-style-two">

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="clearfix">

                        <div class="logo-outer">
                            <div class="logo"><a href="{{ url('/') }}"><img
                                        src="{{ url('assets/images/my-images/logos/header-logo.png') }}" alt=""
                                        title=""></a>
                            </div>
                        </div>

                        <div class="upper-right clearfix">

                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="la la-home"></span></div>
                                <ul>
                                    <li><span>Visit Us</span></li>
                                    <li>{{ env('OFFICE_SHORT_ADDRESS', '69, Kankurgachhi 2nd Lane, Kolkata-700054.') }}</li>
                                </ul>
                            </div>

                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="la la-phone"></span></div>
                                <ul>
                                    <li><span>Call Us</span></li>
                                    <li>{{ env('OFFICE_PHONE', '8777036806') }}</li>
                                </ul>
                            </div>

                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="la la-clock-o"></span></div>
                                <ul>
                                    <li><span>Mon - Sat</span></li>
                                    <li>09:00 to 18:00</li>
                                </ul>
                            </div>

                            <!--Info Box-->
                            <div class="upper-column info-box btn-box">
                                <a href="{{ url('contact-us') }}" class="theme-btn btn-style-four">Get Free Quote</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Upper -->

            <!--Header-lower-->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-dark">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon flaticon-menu-1"></span>
                                    </button>
                                </div>

                                <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ url('/about-us') }}">About Us</a></li>
                                        {{-- <li class="dropdown"><a href="{{ url('#') }}">About Us</a>
                                            <ul>
                                                <li><a href="{{ url('about-us') }}">About Us</a></li>
                                                <li><a href="{{ url('team') }}">Team</a></li>
                                                <li><a href="{{ url('faq') }}">FAQ's</a></li>
                                                <li><a href="{{ url('pricing') }}">Price List</a></li>
                                            </ul>
                                        </li> --}}
                                        <li class="dropdown"><a href="{{ url('#') }}">Wigs</a>
                                            <ul>
                                                {{-- <li><a href="{{ url('blog') }}">Wigs</a></li>
                                                <li><a href="{{ url('blog') }}">Blog Detail</a></li> --}}
                                                @if ($products)
                                                    @foreach ($products as $id => $product)
                                                        <li><a
                                                                href="{{ url('products-detail/' . $id) }}">{{ $product }}</a>
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('products') }}">Products</a></li>
                                        {{-- <li class="dropdown"><a href="{{ url('#') }}">Products</a>
                                            <ul>
                                                <li><a href="{{ url('products') }}">Products</a></li>
                                                <li><a href="{{ url('products-detail') }}">Product Details</a></li>
                                            </ul>
                                        </li> --}}
                                        {{-- <li class="dropdown"><a href="{{ url('#') }}">Services</a>
                                            <ul>
                                                <li><a href="{{ url('services') }}">Services</a></li>
                                                <li><a href="{{ url('service-detail') }}">Desktop Repair</a></li>
                                                <li><a href="{{ url('service-detail') }}">Laptop Repair</a></li>
                                                <li><a href="{{ url('service-detail') }}">Tablets Repair</a></li>
                                                <li><a href="{{ url('service-detail') }}">Smart Phone Repair</a></li>
                                                <li><a href="{{ url('service-detail') }}">Services Detail</a></li>
                                            </ul>
                                        </li> --}}
                                        <li><a href="{{ url('gallery') }}">Gallery</a></li>

                                        {{-- <li class="dropdown"><a href="{{ url('#') }}">shop</a>
                                            <ul>
                                                <li><a href="{{ url('shopping-cart') }}">Shopping Cart</a></li>
                                                <li><a href="{{ url('checkout') }}">Checkout</a></li>
                                            </ul>
                                        </li> --}}
                                        <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                                        {{-- <li><a href="{{ url('login') }}">Login</a></li>
                                        <li><a href="{{ url('register') }}">Register</a></li> --}}
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->

                            <!-- Outer Box -->
                            <div class="outer-box">
                                <ul class="social-icon-three clearfix">
                                    <li><a href="{{ url('#') }}"><i class="la la-facebook-official"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-twitter"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-google-plus"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-dribbble"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-pinterest"></i></a></li>
                                </ul>

                                <!--Search Box-->
                                <div class="search-box-outer">
                                    <div class="dropdown">
                                        <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                                class="la la-search"></span></button>
                                        <ul class="dropdown-menu pull-right search-panel"
                                            aria-labelledby="dropdownMenu3">
                                            <li class="panel-outer">
                                                <div class="form-container">
                                                    <form method="post" action="blog">
                                                        <div class="form-group">
                                                            <input type="search" name="field-name" value=""
                                                                placeholder="Search Here" required>
                                                            <button type="submit" class="search-btn"><span
                                                                    class="la la-search"></span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!-- Sticky Header -->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="{{ url('/') }}" title=""><img
                                src="{{ url('assets/images/my-images/logos/header-logo.png') }}" alt=""
                                title=""></a>
                    </div>
                    <!--Right Col-->
                    <div class="pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-collapse show collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/about-us') }}">About Us</a></li>
                                    {{-- <li class="dropdown"><a href="{{ url('#') }}">Services</a>
                                        <ul>
                                            <li><a href="{{ url('services') }}">Services</a></li>
                                            <li><a href="{{ url('service-detail') }}">Desktop Repair</a></li>
                                            <li><a href="{{ url('service-detail') }}">Laptop Repair</a></li>
                                            <li><a href="{{ url('service-detail') }}">Tablets Repair</a></li>
                                            <li><a href="{{ url('service-detail') }}">Smart Phone Repair</a></li>
                                            <li><a href="{{ url('service-detail') }}">Services Detail</a></li>
                                        </ul>
                                    </li> --}}

                                    <li class="dropdown"><a href="{{ url('#') }}">Wigs</a>
                                        <ul>
                                            {{-- <li><a href="{{ url('blog') }}">Wigs</a></li>
                                            <li><a href="{{ url('blog') }}">Blog Detail</a></li> --}}
                                            @if ($products)
                                                @foreach ($products as $id => $product)
                                                    <li><a
                                                            href="{{ url('products-detail/' . $id) }}">{{ $product }}</a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('products') }}">Products</a></li>
                                    {{-- <li class="dropdown"><a href="{{ url('#') }}">Products</a>
                                        <ul>
                                            <li><a href="{{ url('products') }}">Products</a></li>
                                            <li><a href="{{ url('products-detail') }}">Product Details</a></li>
                                        </ul>
                                    </li> --}}
                                    <li><a href="{{ url('gallery') }}">Gallery</a></li>
                                        {{-- <li class="dropdown"><a href="{{ url('#') }}">shop</a>
                                            <ul>
                                                <li><a href="{{ url('shopping-cart') }}">Shopping Cart</a></li>
                                                <li><a href="{{ url('checkout') }}">Checkout</a></li>
                                            </ul>
                                        </li> --}}
                                    <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                                    {{-- <li><a href="{{ url('login') }}">Login</a></li>
                                    <li><a href="{{ url('register') }}">Register</a></li> --}}
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                    </div>
                </div>
            </div><!-- End Sticky Menu -->
        </header>
        <!--End Main Header -->
