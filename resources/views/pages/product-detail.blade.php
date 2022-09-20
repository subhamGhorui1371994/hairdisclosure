@extends('layouts.template')
@section('title', 'Product Detail')
@section('sub-title', '')
@section('content')

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row">
                <!--content side-->
                <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
                    <div class="product-details">
                        <!--Basic Details-->
                        <div class="basic-details">
                            <div class="row clearfix">
                                <div class="image-column col-lg-5 col-md-12 col-sm-12 wow fadeIn">
                                    <figure class="image-box"><a href="{{ URL::asset(checkAndRenderImage($productDetails->banner_image, 'assets/images/resource/service-2.jpg')) }}"
                                            class="lightbox-image" title="Image Caption Here"><img
                                                src="{{ URL::asset(checkAndRenderImage($productDetails->banner_image, 'assets/images/resource/service-2.jpg')) }}" alt=""></a>
                                    </figure>
                                </div>
                                <div class="info-column col-lg-7 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="details-header">
                                            <h4>Patient Ninja</h4>
                                            <div class="item-price"><del>$55.00</del> $35.00</div>
                                            <div class="rating">
                                                <span class="la la-star"></span><span class="la la-star"></span><span
                                                    class="la la-star"></span><span class="la la-star"></span><span
                                                    class="la la-star"></span>
                                            </div>
                                            <span class="review">( 3 Customer Reviews )</span>
                                        </div>
                                        <div class="text">{!!html_entity_decode($productDetails->description)!!}</div>
                                        <div class="clearfix">
                                            <div class="item-quantity"><input class="quantity-spinner" type="text"
                                                    value="2" name="quantity"></div>
                                            <button type="button" class="theme-btn btn-style-one">Add to
                                                Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Basic Details-->

                        <!--Product Info Tabs-->
                        <div class="product-info-tabs">

                            <!--Product Tabs-->
                            <div class="prod-tabs tabs-box" id="product-tabs">

                                <!--Tab Btns-->
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li data-tab="#prod-description" class="tab-btn ">DESCRIPITON</li>
                                    <li data-tab="#prod-reviews" class="tab-btn active-btn">REVIEWS (3)</li>
                                </ul>

                                <!--Tabs Content-->
                                <div class="tabs-container tabs-content">

                                    <!--Tab / Active Tab-->
                                    <div class="tab " id="prod-description">

                                        <div class="content">
                                            <p>One of the best hardware options available to the mining community,
                                                this product is quiet and efficient. It’s a true powerhouse,
                                                offering excellent performance with a reasonable price tag and
                                                comparatively low power consumption. If you need a reliable option
                                                for your mining rig, look no further. Can be set up to mine a number
                                                of currencies (bitcoin, bitcoin gold, monero, etc.), although take
                                                care to configure it properly as different cryptocurrencies require
                                                different settings.</p>
                                        </div>
                                    </div>

                                    <!--Tab-->
                                    <div class="tab active-tab" id="prod-reviews">

                                        <!--Reviews Container-->
                                        <div class="reviews-container">

                                            <!--Reviews-->
                                            <article class="review-box clearfix">
                                                <figure class="rev-thumb"><img
                                                        src="{{url('assets/images/resource/review-thumb-1.jpg')}}" alt="">
                                                </figure>
                                                <div class="rev-content">
                                                    <div class="rev-info"><span>James Koster</span> June 7, 2013
                                                    </div>
                                                    <div class="rating"><span class="la la-star"></span><span
                                                            class="la la-star"></span><span class="la la-star"></span><span
                                                            class="la la-star"></span><span class="la la-star"></span></div>
                                                    <div class="rev-text">
                                                        <p>Product is simply dummy text of the printing and
                                                            typesetting Autocare. Lorem Ipsum has been the workshop.
                                                        </p>
                                                    </div>
                                                </div>
                                            </article>

                                            <!--Reviews-->
                                            <article class="review-box reply clearfix">
                                                <figure class="rev-thumb"><img
                                                        src="{{url('assets/images/resource/review-thumb-2.jpg')}}" alt="">
                                                </figure>
                                                <div class="rev-content">
                                                    <div class="rev-info"><span>Cobus Besten</span> June 7, 2013
                                                    </div>
                                                    <div class="rating"><span class="la la-star"></span><span
                                                            class="la la-star"></span><span class="la la-star"></span><span
                                                            class="la la-star"></span><span class="la la-star"></span></div>
                                                    <div class="rev-text">
                                                        <p>Product is simply dummy text of the printing</p>
                                                    </div>
                                                </div>
                                            </article>

                                            <!--Reviews-->
                                            <article class="review-box clearfix">
                                                <figure class="rev-thumb"><img
                                                        src="{{url('assets/images/resource/review-thumb-3.jpg')}}" alt="">
                                                </figure>
                                                <div class="rev-content">
                                                    <div class="rev-info"><span>Magnus</span> June 7, 2013</div>
                                                    <div class="rating"><span class="la la-star"></span><span
                                                            class="la la-star"></span><span class="la la-star"></span><span
                                                            class="la la-star"></span><span class="la la-star"></span></div>
                                                    <div class="rev-text">
                                                        <p>Contrary to popular belief, Lorem Ipsum is not simply
                                                            random text. It has roots in a piece of classical Latin
                                                            literature from 45 BC, making it over 2000 years old.
                                                            Richard McClintock,</p>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>

                                        <!-- Comment Form -->
                                        <div class="shop-comment-form">
                                            <h2>Add a Review</h2>
                                            <div class="mail-text"><span>Your email address will not be
                                                    published.</span> Required fields are marked*</div>
                                            <div class="rating-box">
                                                <div class="text"> Your Rating:</div>
                                                <div class="rating"><a href="{{ url('#') }}"><span
                                                            class="la la-star-o"></span></a><a
                                                        href="{{ url('#') }}"><span class="la la-star-o"></span></a><a
                                                        href="{{ url('#') }}"><span class="la la-star-o"></span></a><a
                                                        href="{{ url('#') }}"><span class="la la-star-o"></span></a><a
                                                        href="{{ url('#') }}"><span class="la la-star-o"></span></a>
                                                </div>
                                            </div>
                                            <form method="post" action="contact">
                                                <div class="form-group">
                                                    <label>Your Review*</label>
                                                    <textarea name="message" placeholder=""></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" name="username" placeholder="" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" name="number" placeholder="" required>
                                                </div>
                                                <div class="form-group">
                                                    <button class="theme-btn btn-style-one" type="submit"
                                                        name="submit-form">Submit now</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End product info tabs -->
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar shop-sidebar">

                        <!--search box-->
                        <div class="sidebar-widget search-box">
                            <form method="post" action="blog">
                                <div class="form-group">
                                    <input type="search" name="search-field" value=""
                                        placeholder="Search Product" required="">
                                    <button type="submit"><span class="icon la la-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!-- Categories -->
                        <div class="sidebar-widget categories">
                            <div class="sidebar-title">
                                <h2>Categories</h2>
                            </div>
                            <ul class="category-list">
                                <li><a href="{{ url('#') }}">Tablet Repair <span>12</span></a></li>
                                <li><a href="{{ url('#') }}">Pc & Mac Repair <span>15</span></a></li>
                                <li><a href="{{ url('#') }}">Laptop Repair <span>10</span></a></li>
                                <li><a href="{{ url('#') }}">Game Console Repair <span>08</span></a></li>
                                <li><a href="{{ url('#') }}">Phone Repair <span>05</span></a></li>
                            </ul>
                        </div>

                        <!--Price Filter Widget-->
                        <div class="sidebar-widget price-filter-widget">
                            <div class="sidebar-title">
                                <h2>Price Fliter</h2>
                            </div>
                            <div class="widget-content">
                                <div class="range-slider-one clearfix">
                                    <div class="price-range-slider"></div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <a href="{{ url('#') }}" class="theme-btn">Filtter</a>
                                        </div>
                                        <div class="pull-right">
                                            <div class="title">Price:</div>
                                            <div class="input"><input type="text" class="property-amount"
                                                    name="field-name" readonly></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Top Related Posts -->
                        <div class="sidebar-widget related-posts">
                            <div class="sidebar-title">
                                <h2>Popular Products</h2>
                            </div>
                            <div class="widget-content">
                                <!-- Related Post -->
                                <div class="post">
                                    <figure class="post-thumb"><a href="shop-detail"><img
                                                src="{{url('assets/images/resource/products/thumb-1.jpg')}}" alt=""></a>
                                    </figure>
                                    <h4><a href="shop-detail">Woo Album #4</a></h4>
                                    <div class="rating"><span class="la la-star"></span><span
                                            class="la la-star"></span><span class="la la-star"></span><span
                                            class="la la-star"></span><span class="la la-star"></span></div>
                                    <span class="price">$9.00</span>
                                </div>

                                <!-- Related Post -->
                                <div class="post">
                                    <figure class="post-thumb"><a href="shop-detail"><img
                                                src="{{url('assets/images/resource/products/thumb-2.jpg')}}" alt=""></a>
                                    </figure>
                                    <h4><a href="shop-detail">Happy Ninja</a></h4>
                                    <div class="rating"><span class="la la-star"></span><span
                                            class="la la-star"></span><span class="la la-star"></span><span
                                            class="la la-star"></span><span class="la la-star"></span></div>
                                    <span class="price">$18.00</span>
                                </div>

                                <!-- Related Post -->
                                <div class="post">
                                    <figure class="post-thumb"><a href="shop-detail"><img
                                                src="{{url('assets/images/resource/products/thumb-3.jpg')}}" alt=""></a>
                                    </figure>
                                    <h4><a href="shop-detail">Ninja Silhouette</a></h4>
                                    <div class="rating"><span class="la la-star"></span><span
                                            class="la la-star"></span><span class="la la-star"></span><span
                                            class="la la-star"></span><span class="la la-star"></span></div>
                                    <span class="price">$20.00</span>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->
@endsection
