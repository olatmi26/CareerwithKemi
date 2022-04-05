<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- Mobile Metas --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>Career with Kemi @yield('title')</title>  {{-- {{ $title}} ?? config() --}}
    <meta name="keywords"
        content="Resume Builder | Career CV Maker| ATS Resume and CV builder| Career with Human Resource Professional| Kemi Onadiran" />
    <meta name="description"
        content="Create a Professional Career Resume with ATS compliance to Get Your Dream Job | Fast &amp; with Career with Kemi Resune Builder | Unique for each professional for any Position | Best Price on the across the world">
    <meta name="description" property="og:description"
        content="Create a Professional Career Resume with ATS compliance to Get Your Dream Job | Fast &amp; with Career with Kemi Resune Builder | Unique for each professional for any Position | Best Price on the across the world.">
    <meta name="author" content="career with kemi | Prefessional Human Resource Executive">

    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('images/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('images/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    {{--Web Fonts --}}
    <link id="googleFonts"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap"
        rel="stylesheet" type="text/css">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/fonts/font-awesome6.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('vendor/animate/animate.compat.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/magnific-popup/magnific-popup.min.css')}}">
    <!-- Revolution Slider Addon - Typewriter -->
    <link rel="stylesheet" type="text/css"
        href="{{asset('vendor/rs-plugin/revolution-addons/typewriter/css/typewriter.css')}}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/theme-elements.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/theme-blog.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/theme-shop.css')}}">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{asset('frontend/css/skin-14.css')}}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app2.css')}}">

    <!-- Head Libs -->
    <script src="{{asset('vendor/modernizr/modernizr.min.js')}}"></script>
    @livewireStyles
</head>

<body data-plugin-page-transition>
    <div class="body">
        <header id="header" class="header-transparent header-semi-transparent header-semi-transparent-dark"
            data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': false, 'stickyStartAt': 53, 'stickySetTop': '-53px'}">
            <div class="header-body border-top-0 bg-dark box-shadow-none">
                {{-- <x-top-bar /> --}}
                <div class="header-container header-container-height-sm container container-xl-custom">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="{{ route('index-page') }}">
                                        <img alt="CareersWithKemi" width="82" height="82"
                                            src="images/careers-with-kemi-logo.png">
                                        {{-- <img alt="CareersWithKemi" width="82" height="82"
                                            src="images/favicon_package_v0.16/android-chrome-192x192.png"> --}}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <x-nav-bar />
                    </div>
                </div>
            </div>
        </header>
        <div role="main" class="main">
            @yield('content')
        </div>
        <x-footer />
    </div>
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/jquery.appear/jquery.appear.min.js')}}"></script>
    <script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/jquery.validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
    <script src="{{asset('vendor/lazysizes/lazysizes.min.js')}}"></script>
    <script src="{{asset('vendor/isotope/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('vendor/vide/jquery.vide.min.js')}}"></script>
    <script src="{{asset('vendor/vivus/vivus.min.js')}}"></script>
    <!-- Theme Base, Components and Settings -->
    <script src="{{asset('frontend/js/theme.js')}}"></script>
    <!-- Revolution Slider Addon - Typewriter -->
    <script type="text/javascript"
        src="{{asset('vendor/rs-plugin/revolution-addons/typewriter/js/revolution.addon.typewriter.min.js')}}"></script>
    <!-- Theme Initialization Files -->
    <script src="{{asset('frontend/js/theme.init.js')}}"></script>
    <!-- Theme Custom -->
    <script src="{{asset('frontend/js/custom.js')}}"></script>
    <script src="{{ asset('js/app.js')}}"></script>
    @livewireScripts
    @yield('script')
</body>
</html>
