<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- Stylesheets -->
    <link href="{{url('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{url('assets/plugins/revolution/css/settings.css')}}" rel="stylesheet" type="text/css">
    <!-- REVOLUTION SETTINGS STYLES -->
    <link href="{{url('assets/plugins/revolution/css/layers.css')}}" rel="stylesheet" type="text/css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link href="{{url('assets/plugins/revolution/css/navigation.css')}}" rel="stylesheet" type="text/css">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/responsive.css')}}" rel="stylesheet">

    <!--Color Themes-->
    <link id="theme-color-file" href="{{url('assets/css/color-themes/default-theme.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{url('assets/images/my-images/logos/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{url('assets/images/my-images/logos/favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="assets/js/respond.js"></script><![endif]-->
    <style>
        .wp-float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            right:40px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            font-size:30px;
            box-shadow: 2px 2px 3px #999;
            z-index:100;
        }

        .wp-my-float{
            margin-top:16px;
        }
        label.error {
            color: #dc3545;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

        @include('layouts.template-header')

        @section('bread-crumb')
            <!--Page Title-->
            <section class="page-title" style="background-image:url(assets/images/my-images/background/hair1.jpg);">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <h1>@yield('title')</h1>
                        <ul class="bread-crumb clearfix">
                            <li>
                                <a href="{{ url('/') }}">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/') }}">
                                    @yield('title')
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!--End Page Title-->
        @show
        {!! showMessage() !!}
        @yield('content')

        @include('layouts.template-fun-fact-section')

        {{-- @include('layouts.template-clients-section') --}}

        @include('layouts.template-footer')


        <a href="https://api.whatsapp.com/send?phone=918777036806&text=Hello Hair Disclosure, I want a wig." class="wp-float" target="_blank">
            <i class="fa fa-whatsapp wp-my-float"></i>
        </a>


    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="la la-angle-double-up"></span></div>


    <script src="{{url('assets/js/jquery.js')}}"></script>
    <script src="{{url('assets/js/popper.min.js')}}"></script>
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <!--Revolution Slider-->
    <script src="{{url('assets/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{url('assets/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{url('assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{url('assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{url('assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{url('assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{url('assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{url('assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{url('assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{url('assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{url('assets/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script src="{{url('assets/js/main-slider-script.js')}}"></script>
    <!--End Revolution Slider-->
    <script src="{{url('assets/js/jquery.fancybox.js')}}"></script>
    <script src="{{url('assets/js/owl.js')}}"></script>
    <script src="{{url('assets/js/wow.js')}}"></script>
    <script src="{{url('assets/js/appear.js')}}"></script>
    <script src="{{url('assets/js/mixitup.js')}}"></script>
    <script src="{{url('assets/js/script.js')}}"></script>
    @yield('script')
</body>

</html>
