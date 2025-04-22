<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AnchorPointCargo | On-Time Reliable Logistics Services.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    <link href="https://api.mapbox.com/mapbox-gl-js/v3.7.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v3.7.0/mapbox-gl.js"></script>

    <!-- CSS
   ============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome.css') }}">
    <!-- Flaticon -->
    <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}">
    <!-- Base Icons -->
    <link rel="stylesheet" href="{{ asset('frontend/css/pbminfotech-base-icons.css') }}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper.min.css') }}">
    <!-- Magnific -->
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <!-- AOS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}">
    <!-- Shortcode CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/shortcode.css') }}">
    <!-- Base CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/base.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = '74bdbcbbafb4badbb5e364a9bc9eb687b3f98e0d';
        window.smartsupp || (function(d) {
            var s, c, o = smartsupp = function() {
                o._.push(arguments)
            };
            o._ = [];
            s = d.getElementsByTagName('script')[0];
            c = d.createElement('script');
            c.type = 'text/javascript';
            c.charset = 'utf-8';
            c.async = true;
            c.src = 'https://www.smartsuppchat.com/loader.js?';
            s.parentNode.insertBefore(c, s);
        })(document);
    </script>
    <noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>

</head>

<body>

    <!-- page wrapper -->
    <div class="page-wrapper" id="page">

        <!-- Header Main Area -->
        <header class="site-header header-style-1">
            <div class="pbmit-header-overlay">
                <div class="pbmit-main-header-area">
                    <div class="container-fluid">
                        <div class="pbmit-header-content d-flex justify-content-between align-items-center">
                            <div class="pbmit-logo-menuarea d-flex justify-content-between align-items-center">
                                <div class="site-branding">
                                    <h1 class="site-title">
                                        <a href="{{ route('home') }}">
                                            <img class="logo-img" src="{{ asset('frontend/images/logo.png') }}"
                                                alt="AnchorPointCargo">
                                        </a>
                                    </h1>
                                </div>
                                <div class="site-navigation">
                                    <nav class="main-menu navbar-expand-xl navbar-light">
                                        <div class="navbar-header">
                                            <!-- Toggle Button -->
                                            <button class="navbar-toggler" type="button">
                                                <i class="pbmit-base-icon-menu-1"></i>
                                            </button>
                                        </div>
                                        <div class="pbmit-mobile-menu-bg"></div>
                                        <div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
                                            <div class="pbmit-menu-wrap">
                                                <span class="closepanel">
                                                    <svg class="qodef-svg--close qodef-m"
                                                        xmlns="http://www.w3.org/2000/svg" width="20.163"
                                                        height="20.163" viewBox="0 0 26.163 26.163">
                                                        <rect width="36" height="1"
                                                            transform="translate(0.707) rotate(45)"></rect>
                                                        <rect width="36" height="1"
                                                            transform="translate(0 25.456) rotate(-45)"></rect>
                                                    </svg>
                                                </span>
                                                <ul class="navigation clearfix">
                                                    <li>
                                                        <a href="{{ route('home') }}">Home</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('about') }}">About</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('services.index') }}">Services</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('contact') }}">Contact</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                            <div class="pbmit-right-box d-flex align-items-center">
                                <div class="pbmit-header-button2">
                                    <a class="pbmit-btn pbmit-btn-white" href="{{ route('track') }}">
                                        <span class="pbmit-button-content-wrapper">
                                            <span class="pbmit-button-text">Track Package</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Title Bar -->
            <div class="pbmit-title-bar-wrapper">
                <div class="container">
                    <div class="pbmit-title-bar-content">
                        <div class="pbmit-title-bar-content-inner">
                            <div class="pbmit-tbar">
                                <div class="pbmit-tbar-inner container">
                                    <h1 class="pbmit-tbar-title"> About Us</h1>
                                </div>
                            </div>
                            <div class="pbmit-breadcrumb">
                                <div class="pbmit-breadcrumb-inner">
                                    <span>
                                        <a title="" href="#"
                                            class="home"><span>AnchorPointCargo</span></a>
                                    </span>
                                    <span class="sep">
                                        <i class="pbmit-base-icon-angle-right"></i>
                                    </span>
                                    <span><span class="post-root post post-post current-item"> About Us</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Title Bar End-->
        </header>
        <!-- Header Main Area End Here -->

        {{ $slot }}

        <!-- footer -->
        <footer class="site-footer pbmit-bg-color-secondary">
            <div class="pbmit-footer-big-area-wrapper">
                <div class="pbmit-footer-widget-area">
                    <div class="container">
                        <div class="row">
                            <div class="pbmit-footer-widget-col-2 col-md-4">
                                <aside class="widget">
                                    <img class="logo-img" width="150"
                                        src="{{ asset('frontend/images/logo.png') }}" alt="AnchorPointCargo">
                                </aside>
                            </div>
                            <div class="pbmit-footer-widget-col-3 col-md-2">
                                <aside class="widget">
                                    <h2 class="widget-title">Useful Links</h2>
                                    <ul class="menu">
                                        <li><a href="{{ route('home') }}">Home</a></li>
                                        <li><a href="{{ route('about') }}">About</a></li>
                                        <li><a href="{{ route('services.index') }}">Services</a></li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                </aside>
                            </div>
                            <div class="pbmit-footer-widget-col-3 col-md-2">
                                <aside class="widget">
                                    <h2 class="widget-title">Our Location</h2>
                                    <ul class="menu">
                                        <li>Unit 3, International Business Park, Stratford, United Kingdom</li>
                                    </ul>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pbmit-footer-text-area">
                    <div class="container">
                        <div class="pbmit-footer-text-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pbmit-footer-copyright-text-area">
                                        Copyright © {{ now()->year }} <a href="#">AnchorPointCargo</a>. All
                                        Rights Reserved.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer End -->

    </div>
    <!-- page wrapper End -->

    <!-- Scroll To Top -->
    <div class="pbmit-backtotop">
        <div class="pbmit-arrow">
            <i class="pbmit-base-icon-plane"></i>
        </div>
        <div class="pbmit-hover-arrow">
            <i class="pbmit-base-icon-plane"></i>
        </div>
    </div>
    <!-- Scroll To Top End -->

    <!-- JS
  ============================================ -->
    <!-- jQuery JS -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- jquery Waypoints JS -->
    <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
    <!-- jquery Appear JS -->
    <script src="{{ asset('frontend/js/jquery.appear.js') }}"></script>
    <!-- Numinate JS -->
    <script src="{{ asset('frontend/js/numinate.min.js') }}"></script>
    <!-- Slick JS -->
    <script src="{{ asset('frontend/js/swiper.min.js') }}"></script>
    <!-- Magnific JS -->
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Circle Progress JS -->
    <script src="{{ asset('frontend/js/circle-progress.js') }}"></script>
    <!-- countdown JS -->
    <script src="{{ asset('frontend/js/jquery.countdown.min.js') }}"></script>
    <!-- AOS -->
    <script src="{{ asset('frontend/js/aos.js') }}"></script>
    <!-- GSAP -->
    <script src="{{ asset('frontend/js/gsap.js') }}"></script>
    <!-- Scroll Trigger -->
    <script src="{{ asset('frontend/js/ScrollTrigger.js') }}"></script>
    <!-- Split Text -->
    <script src="{{ asset('frontend/js/SplitText.js') }}"></script>
    <!-- Theia Sticky Sidebar JS -->
    <script src="{{ asset('frontend/js/theia-sticky-sidebar.js') }}"></script>
    <!-- GSAP Animation -->
    <script src="{{ asset('frontend/js/gsap-animation.js') }}"></script>
    <!-- Form Validator -->
    <script src="{{ asset('frontend/js/jquery-validate/jquery.validate.min.js') }}"></script>
    <!-- Scripts JS -->
    <script src="{{ asset('frontend/js/scripts.js') }}"></script>

    <script>
        (function() {
            function c() {
                var b = a.contentDocument || a.contentWindow.document;
                if (b) {
                    var d = b.createElement('script');
                    d.innerHTML =
                        "window.__CF$cv$params={r:'931312185f3776ed',t:'MTc0NDgwMDA5MS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../cdn-cgi/challenge-platform/h/g/scripts/jsd/44e6f86df4dc/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";
                    b.getElementsByTagName('head')[0].appendChild(d)
                }
            }
            if (document.body) {
                var a = document.createElement('iframe');
                a.height = 1;
                a.width = 1;
                a.style.position = 'absolute';
                a.style.top = 0;
                a.style.left = 0;
                a.style.border = 'none';
                a.style.visibility = 'hidden';
                document.body.appendChild(a);
                if ('loading' !== document.readyState) c();
                else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
                else {
                    var e = document.onreadystatechange || function() {};
                    document.onreadystatechange = function(b) {
                        e(b);
                        'loading' !== document.readyState && (document.onreadystatechange = e, c())
                    }
                }
            }
        })();
    </script>
</body>

</html>
