<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('dash/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dash/js/popper.min.js') }}"></script>
    <script src="{{ asset('dash/js/bootstrap.min.js') }}"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('dash/css/bootstrap.min.css') }}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ asset('dash/css/typography.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('dash/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('dash/css/responsive.css') }}">

    <script src="https://kit.fontawesome.com/7016607b5a.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="wrapper">
        <div class="iq-sidebar">
            <div class="iq-navbar-logo d-flex justify-content-between">
                <a href="/welcome" class="header-logo">
                    <img src="{{ asset('frontend/images/logo-with-black.png') }}" alt="">
                </a>
                <div class="iq-menu-bt align-self-center">
                    <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-menu-line"></i></div>
                        <div class="hover-circle"><i class="ri-close-fill"></i></div>
                    </div>
                </div>
            </div>
            <div id="sidebar-scrollbar">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="iq-menu">
                        <li class="active">
                            <a href="{{ route('dashboard') }}" class="iq-waves-effect"><span class="ripple rippleEffect"></span><i
                                    class="las la-home iq-arrow-left"></i><span>Dashboard</span></a>
                        </li>
                        <li aria-expanded="true">
                            <a href="{{ route('order.index') }}" class="iq-waves-effect"><i
                                    class="lab la-wpforms iq-arrow-left"></i><span>Orders</span></a>
                        </li>
                        <li aria-expanded="true">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="iq-waves-effect" href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();"><i
                                        class="las la-power-off iq-arrow-left"></i><span>Logout</span></a>
                            </form>
                        </li>
                    </ul>
                </nav>
                <div class="p-3"></div>
            </div>
        </div>

        <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="iq-menu-bt d-flex align-items-center">
                        <div class="wrapper-menu">
                            <div class="main-circle"><i class="ri-menu-line"></i></div>
                            <div class="hover-circle"><i class="ri-close-fill"></i></div>
                        </div>
                        <div class="iq-navbar-logo d-flex justify-content-between ml-3">
                            <a href="{{ route('dashboard') }}" class="header-logo">
                                <img src="{{ asset('frontend/images/logo-with-black.png') }}" alt="">
                            </a>
                        </div>
                    </div>

                    <ul class="navbar-list ml-auto">
                        <li class="line-height">
                            <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                              <i class="ri-user-fill ri-2x"></i>
                                <div class="caption ml-2">
                                    <p class="mb-0 line-height" style="font-weight: bold;">{{ auth()->user()->email }}</p>
                                    <p class="mb-0">Admin</p>
                                </div>
                            </a>
                            <div class="iq-sub-dropdown iq-user-dropdown">
                                <div class="iq-card shadow-none m-0">
                                    <div class="iq-card-body p-0 ">
                                        <div class="bg-primary p-3">
                                            <h5 class="mb-0 text-white line-height">Hello, Admin</h5>
                                            <span class="text-white font-size-12">{{ auth()->user()->email }}</span>
                                        </div>
                                        <a href="{{ route('order.index') }}" class="iq-sub-card iq-bg-primary-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-primary">
                                                    <i class="ri-pantone-line"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Orders</h6>
                                                    <p class="mb-0 font-size-12">View all orders.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="d-inline-block w-100 text-center p-3">
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a class="bg-primary iq-sign-btn" href="route('logout')"
                                                    role="button"
                                                    onclick="event.preventDefault(); this.closest('form').submit();">Logout<i
                                                        class="ri-login-box-line ml-2"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                </nav>
            </div>
        </div>

        {{ $slot }}
    </div>

    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    <small>&copy; 2024 <a href="#"><b>AnchorPointCargo</b></a>. All Rights Reserved.</small>
                </div>
            </div>
        </div>
    </footer>

    <!-- Appear JavaScript -->
    <script src="{{ asset('dash/js/jquery.appear.js') }}"></script>
    <!-- Countdown JavaScript -->
    <script src="{{ asset('dash/js/countdown.min.js') }}"></script>
    <!-- Counterup JavaScript -->
    <script src="{{ asset('dash/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('dash/js/jquery.counterup.min.js') }}"></script>
    <!-- Wow JavaScript -->
    <script src="{{ asset('dash/js/wow.min.js') }}"></script>
    <!-- Apexcharts JavaScript -->
    <script src="{{ asset('dash/js/apexcharts.js') }}"></script>
    <!-- Slick JavaScript -->
    <script src="{{ asset('dash/js/slick.min.js') }}"></script>
    <!-- Select2 JavaScript -->
    <script src="{{ asset('dash/js/select2.min.js') }}"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="{{ asset('dash/js/owl.carousel.min.js') }}"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="{{ asset('dash/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="{{ asset('dash/js/smooth-scrollbar.js') }}"></script>
    <!-- lottie JavaScript -->
    <script src="{{ asset('dash/js/lottie.js') }}"></script>
    <!-- am core JavaScript -->
    <script src="{{ asset('dash/js/core.js') }}"></script>
    <!-- am charts JavaScript -->
    <script src="{{ asset('dash/js/charts.js') }}"></script>
    <!-- am animated JavaScript -->
    <script src="{{ asset('dash/js/animated.js') }}"></script>
    <!-- am kelly JavaScript -->
    <script src="{{ asset('dash/js/kelly.js') }}"></script>
    <!-- am maps JavaScript -->
    <script src="{{ asset('dash/js/maps.js') }}"></script>
    <!-- am worldLow JavaScript -->
    <script src="{{ asset('dash/js/worldLow.js') }}"></script>
    <!-- Raphael-min JavaScript -->
    <script src="{{ asset('dash/js/raphael-min.js') }}"></script>
    <!-- Morris JavaScript -->
    <script src="{{ asset('dash/js/morris.js') }}"></script>
    <!-- Morris min JavaScript -->
    <script src="{{ asset('dash/js/morris.min.js') }}"></script>
    <!-- Flatpicker Js -->
    <script src="{{ asset('dash/js/flatpickr.js') }}"></script>
    <!-- Style Customizer -->
    <script src="{{ asset('dash/js/style-customizer.js') }}"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('dash/js/chart-custom.js') }}"></script>
    <!-- Custom JavaScript -->
    <script src="{{ asset('dash/js/custom.js') }}"></script>
</body>

</html>
