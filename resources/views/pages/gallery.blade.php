@extends('layouts.template')
@section('title', 'Gallery')
@section('sub-title', '')
@section('content')

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
                            <figure class="image"><img style="width: 300px;height: 200px;" src="assets/images/gallery/1.jpg" alt=""></figure>
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
                            <figure class="image"><img style="width: 300px;height: 200px;" src="assets/images/gallery/2.jpg" alt=""></figure>
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
                    <div class="project-item all mix male expensive col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img style="width: 300px;height: 200px;" src="assets/images/gallery/3.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Male Type</a></h3>
                                    <div class="category">Catagory : Expensive</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/gimg3.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix male expensive col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img style="width: 300px;height: 200px;" src="assets/images/gallery/4.jpg" alt=""></figure>
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
                            <figure class="image"><img style="width: 300px;height: 200px;" src="assets/images/gallery/5.png" alt=""></figure>
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
                            <figure class="image"><img style="width: 300px;height: 200px;" src="assets/images/gallery/6.jpg" alt=""></figure>
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
                    <div
                        class="project-item all mix male expensive classic col-xl-3 laptop col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img style="width: 300px;height: 200px;" src="assets/images/gallery/7.jpg" alt=""></figure>
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
                            <figure class="image"><img style="width: 300px;height: 200px;" src="assets/images/gallery/gim5.jpg" alt=""></figure>                            <div class="overlay-box">
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
                            <figure class="image"><img style="width: 300px;height: 200px;" src="assets/images/gallery/gimg9.jpg" alt=""></figure>
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
                            <figure class="image"><img style="width: 300px;height: 200px;" src="assets/images/gallery/gimg10.png" alt=""></figure>
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
                            <figure class="image"><img style="width: 300px;height: 200px;" src="assets/images/gallery/gimg11.jpg" alt=""></figure>
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
                            <figure class="image"><img style="width: 300px;height: 200px;" src="assets/images/gallery/gimg12.jpg" alt=""></figure>
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
@endsection
