<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/et-line-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
    <script src="{{ asset('front/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header Area Start -->
<header class="top">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="header-top-left">
                        @foreach(App\Address::all() as $address )
                        <p>
                            <i class="fa fa-phone"></i>
                            {!! $address->phone !!}
                            |
                            <i class="fa fa-envelope-o"></i>
                            {!! $address->email !!}
                        </p>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="header-top-right text-right">
                        <ul>
                            <li><a href="{{ route('login') }}">login</a></li>
                            <li><a href="{{ route('signup') }}">signup</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-area two header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('front/img/logo/logo2.png') }}" alt="eduhome" /></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-6">
                    <div class="content-wrapper text-right">
                        <!-- Main Menu Start -->
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="course.html">courses</a>
                                        <ul>
                                            <li><a href="course.html">courses</a></li>
                                            <li><a href="course-details.html">courses details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="event.html">event</a>
                                        <ul>
                                            <li><a href="event.html">event</a></li>
                                            <li><a href="event-left-side-bar.html">event left sidebar</a></li>
                                            <li><a href="event-right-side-bar.html">event right sidebar</a></li>
                                            <li><a href="event-details.html">event details</a></li>
                                        </ul>
                                    </li>
                                    <li class="hidden-sm"><a href="teacher.html">teacher</a>
                                        <ul>
                                            <li><a href="teacher.html">teacher</a></li>
                                            <li><a href="teacher-details.html">teacher details</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog') }}">blog</a>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="#">Buy Now</a>
                                </ul>
                            </nav>
                        </div>
                        <!--Search Form Start-->
                        <div class="search-btn">
                            <ul data-toggle="dropdown" class="header-search search-toggle">
                                <li class="search-menu">
                                    <i class="fa fa-search"></i>
                                </li>
                            </ul>
                            <div class="search">
                                <div class="search-form">
                                    <form id="search-form" action="#">
                                        <input type="search" placeholder="Search here..." name="search" />
                                        <button type="submit">
                                            <span><i class="fa fa-search"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--End of Search Form-->
                        <!-- Main Menu End -->
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="mobile-menu hidden-lg hidden-md hidden-sm"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End -->
 @yield('content')
<!-- Footer Start -->
<footer class="footer-area">
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-widget pr-60">
                        <div class="footer-logo pb-25">
                            <a href="index.html"><img src="img/logo/footer-logo.png" alt="eduhome"></a>
                        </div>
                        <p>I must explain to you how all this mistaken idea of denoung pleure and praising pain was born and give you a coete account of the system. </p>
                        <div class="footer-social">
                            <ul>
                                <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-widget">
                        <h3>information</h3>
                        <ul>
                            <li><a href="#">addmission</a></li>
                            <li><a href="#">Academic Calender</a></li>
                            <li><a href="event.html">Event List</a></li>
                            <li><a href="#">Hostel &amp; Dinning</a></li>
                            <li><a href="#">TimeTable</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="single-widget">
                        <h3>useful links</h3>
                        <ul>
                            <li><a href="course.html">our courses</a></li>
                            <li><a href="about.html">about us</a></li>
                            <li><a href="teacher.html">teachers &amp; faculty</a></li>
                            <li><a href="#">teams &amp; conditions</a></li>
                            <li><a href="event.html">our events</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-widget">
                        <h3>Our Address</h3>
                      @forelse(App\Address::all() as $add)
                          <p>{{ $add->address }}</p>
                          <p>{{ $add->phone }}</p>
                          <p>{{ $add->email }}</p>
                        @empty
                 @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p>Copyright ©2017. All Right Reserved By Hastech.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<script src="{{ asset('front/js/vendor/jquery-1.12.0.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.meanmenu.js') }}"></script>
<script src="{{ asset('front/js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('front/js/ajax-mail.js') }}"></script>
<script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.mb.YTPlayer.js') }}"></script>
<script src="{{ asset('front/js/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('front/js/plugins.js') }}"></script>
<script src="{{ asset('front/js/main.js') }}"></script>
</body>
</html>

