@extends('layouts.template')
@section('title', 'Blog Detail')
@section('sub-title', '')
@section('content')

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-detail">
                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <div class="image-box wow fadeIn">
                                    <figure class="image"><img src="assets/images/resource/blog-post-1.jpg" alt="">
                                    </figure>
                                </div>

                                <div class="lower-content">
                                    <ul class="info">
                                        <li><a href="{{url('blog-detail')}}"><i class="la la-user"></i> Admin</a></li>
                                        <li><a href="{{url('blog-detail')}}"><i class="la la-calendar"></i> February 17,
                                                2017</a></li>
                                        <li><a href="{{url('blog-detail')}}"><i class="la la-comments"></i> 03 Comments</a>
                                        </li>
                                    </ul>
                                    <h4>iPad Repairs For Schools / Universities Across The Usa</h4>
                                    <p>div>We denounce with righteous indignation and dislike men who are so
                                        beguiled and demoralized by the charm pleasure of the moment, so blinded by
                                        desire, that they cannot foresee the pain ut and trouble that are bound to
                                        ensue and equal blame belongs to those who fail in their duty through
                                        weakness of will, which is the same as saying uts through shrinking from
                                        toil and pain These cases are perfectly simple and easy to distinguish.</p>

                                    <p>Pleasures and praising pains was born and will give you a completed account
                                        of the systems seds, and seds expound the actual teaching of the great
                                        explorer the master-builder Nor again is there anyones who loves or pursues
                                        desires to obtain pain of itself, because it is pain, but because
                                        occasionally.</p>

                                    <div class="two-column">
                                        <div class="row">
                                            <div class="image-column col-lg-6 col-md-6 col-sm-12 wow fadeIn">
                                                <figure class="image"><img src="assets/images/resource/image-4.jpg"
                                                        alt=""></figure>
                                            </div>

                                            <div class="quote-column col-lg-6 col-md-6 col-sm-12">
                                                <blockquote>
                                                    <span class="icon la la-quote-left"></span>
                                                    <p>They have got my project on time with the competition seds
                                                        with a highly skilled, well organized and seds denouncing of
                                                        pleasures experienced team of professional.</p>
                                                    <h5 class="name">Dohn Gaskel</h5>
                                                    <span class="designation">Manager</span>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                    <p>know how to pursue pleasure rationally encounter consequences that are
                                        extremely painful or again is there anyone who loves or pursues or desires
                                        to obtain pain of itself, because it pain, but because occasionally
                                        circumstances occur which toil and pain can undertakes laborious physical
                                        exercise.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Other Options -->
                        <div class="post-share-options clearfix">
                            <div class="pull-left">
                                <p>Tags : </p>
                                <ul class="tags">
                                    <li><a href="{{ url('#') }}">Health</a>,</li>
                                    <li><a href="{{ url('#') }}">Services</a>,</li>
                                    <li><a href="{{ url('#') }}">Growth</a>,</li>
                                </ul>
                            </div>
                            <div class="pull-right">
                                <p>Shere : </p>
                                <ul class="social-icon">
                                    <li><a href="{{ url('#') }}"><span class="la la-pinterest"></span></a></li>
                                    <li><a href="{{ url('#') }}"><span class="la la-google-plus"></span></a></li>
                                    <li><a href="{{ url('#') }}"><span class="la la-twitter"></span></a></li>
                                    <li><a href="{{ url('#') }}"><span class="la la-facebook"></span></a></li>
                                    <li><a href="{{ url('#') }}"><span class="la la-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Comments Area -->
                        <div class="comments-area">
                            <div class="group-title">
                                <h2>03 Comments</h2>
                            </div>
                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb"><img src="assets/images/resource/thumb-3.jpg" alt="">
                                    </div>
                                    <div class="comment-info">
                                        <div class="name">Tom McFarlin</div>
                                        <div class="date"> 03 Sep, 2017</div>
                                    </div>
                                    <div class="text">How all this mistaken idea of denouncing pleasure and praising
                                        pain was born and I will give you a complete account of the system, and
                                        expound the actual teachings.</div>
                                    <a href="{{ url('#') }}" class="reply-btn"><i class="la la-reply-all"></i></a>
                                </div>
                            </div>

                            <div class="comment-box reply-comment">
                                <div class="comment">
                                    <div class="author-thumb"><img src="assets/images/resource/thumb-4.jpg" alt="">
                                    </div>
                                    <div class="comment-info">
                                        <div class="name">William Farlin</div>
                                        <div class="date"> 03 Sep, 2017</div>
                                    </div>

                                    <div class="text">There anyone who loves or pursues or desires to obtain pain
                                        itself, because it is pain, because occasionally circumstances occur some
                                        great pleasure.</div>
                                    <a href="{{ url('#') }}" class="reply-btn"><i class="la la-reply-all"></i></a>
                                </div>
                            </div>

                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb"><img src="assets/images/resource/thumb-5.jpg" alt="">
                                    </div>
                                    <div class="comment-info">
                                        <div class="name">Tom Rich</div>
                                        <div class="date"> 03 Sep, 2017</div>
                                    </div>

                                    <div class="text">How all this mistaken idea of denouncing pleasure and praising
                                        pain was born and I will give you a complete account of the system, and
                                        expound the actual teachings.</div>
                                    <a href="{{ url('#') }}" class="reply-btn"><i class="la la-reply-all"></i></a>
                                </div>
                            </div>
                        </div>

                        <!--Comment Form-->
                        <div class="comment-form">
                            <div class="group-title">
                                <h2>Add Your Comments</h2>
                            </div>
                            <form method="post" action="blog">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Name" required="">
                                    </div>

                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Your Comments"></textarea>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-two" type="submit" name="submit-form">Post
                                            Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar default-sidebar">
                        <!--search box-->
                        <div class="sidebar-widget search-box">
                            <form method="post" action="blog">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search....."
                                        required="">
                                    <button type="submit"><span class="icon la la-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!-- Categories -->
                        <div class="sidebar-widget categories">
                            <div class="sidebar-title">
                                <h2>Category</h2>
                            </div>
                            <ul class="cat-list">
                                <li><a href="{{ url('#') }}">Tablet Repair </a></li>
                                <li><a href="{{ url('#') }}">Data Recovery </a></li>
                                <li><a href="{{ url('#') }}">Pc & Mac Repair </a></li>
                                <li><a href="{{ url('#') }}">Laptop Repair </a></li>
                                <li><a href="{{ url('#') }}">Game Console Repair </a></li>
                                <li><a href="{{ url('#') }}">Phone Repair</a></li>
                            </ul>
                        </div>

                        <!-- Latest News -->
                        <div class="sidebar-widget latest-news">
                            <div class="sidebar-title">
                                <h2>Recent Post</h2>
                            </div>
                            <div class="widget-content">
                                <article class="post">
                                    <div class="post-thumb"><a href="{{url('blog-detail')}}"><img
                                                src="assets/images/resource/post-thumb-3.jpg" alt=""></a></div>
                                    <h3><a href="{{url('blog-detail')}}">Same day iPhone Repairs plymouth.</a></h3>
                                    <div class="post-info">20 September 2018</div>
                                </article>

                                <article class="post">
                                    <div class="post-thumb"><a href="{{url('blog-detail')}}"><img
                                                src="assets/images/resource/post-thumb-4.jpg" alt=""></a></div>
                                    <h3><a href="{{url('blog-detail')}}">All Software Boxes and Dongles</a></h3>
                                    <div class="post-info">20 September 2018</div>
                                </article>

                                <article class="post">
                                    <div class="post-thumb"><a href="{{url('blog-detail')}}"><img
                                                src="assets/images/resource/post-thumb-5.jpg" alt=""></a></div>
                                    <h3><a href="{{url('blog-detail')}}">All Hardwere Problem Solve by Laptop Divice.</a></h3>
                                    <div class="post-info">20 September 2018</div>
                                </article>
                            </div>
                        </div>

                        <!-- Tags -->
                        <div class="sidebar-widget tags">
                            <div class="sidebar-title">
                                <h2>Tags Widget</h2>
                            </div>
                            <ul class="tag-list clearfix">
                                <li><a href="{{ url('#') }}">Phone</a></li>
                                <li><a href="{{ url('#') }}">Tablet</a></li>
                                <li><a href="{{ url('#') }}">Date Recovery</a></li>
                                <li><a href="{{ url('#') }}">Laptop</a></li>
                                <li><a href="{{ url('#') }}">Game Console</a></li>
                                <li><a href="{{ url('#') }}">ios Phone</a></li>
                                <li><a href="{{ url('#') }}">Desktop</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Container -->
@endsection
