<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themexriver">

    <!-- Page Title -->
    <title> @yield('title') - Apex Digital Chain </title>

    <!-- Favicon and Touch Icons -->
    <link href="{{ asset('main/assets/images/favicon/favicon.png') }}"
          rel="shortcut icon" type="image/png">
    <link href="{{ asset('main/assets/images/favicon/apple-touch-icon-57x57.png') }}"
          rel="apple-touch-icon" sizes="57x57">
    <link href="{{ asset('main/assets/images/favicon/apple-touch-icon-72x72.png') }}"
          rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('main/assets/images/favicon/apple-touch-icon-114x114.png') }}"
          rel="apple-touch-icon" sizes="114x114">
    <link href="{{ asset('main/assets/images/favicon/apple-touch-icon-144x144.png') }}"
          rel="apple-touch-icon" sizes="144x144">

    <!-- Icon fonts -->
    <link href="{{ asset('main/assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('main/assets/css/flaticon.css') }}" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('main/assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="{{ asset('main/assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('main/assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('main/assets/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('main/assets/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('main/assets/css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('main/assets/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('main/assets/css/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('main/assets/css/bootstrap-select.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('main/assets/css/style.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- start page-wrapper -->
<div class="page-wrapper">

    <!-- start preloader -->
    <div class="preloader">
        <div class="inner">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- end preloader -->

    <!-- Start header -->
    <header id="header" class="site-header header-style-1">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col col-sm-6">
                        <ul class="contact-info">
                            <li><i class="fa fa-phone-square"></i> Phone: +123 (4567) 890</li>
                            <li><i class="fa fa-clock-o"></i> Mon - Fri: 9 am - 7 pm</li>
                        </ul>
                    </div>
                    <div class="col col-sm-6">
                        <div class="language">
                            <span><i class="fa fa-globe"></i> Lang:</span>
                            <div class="select-box">
                                <select class="selectpicker" id="language-select">
                                    <option>Eng</option>
                                    <option>Ban</option>
                                    <option>Tur</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </div> <!-- end topbar -->

        <nav class="navigation navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="open-btn">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand"><img src="{{ asset('main/assets/images/logo.png') }}" alt></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                    <button class="close-navbar"><i class="fa fa-close"></i></button>
                    <ul class="nav navbar-nav">
                        <li class="menu-item-has-children">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li><a href="{{ url('investment-plans') }}">Investment Plans</a></li>
                        <li><a href="{{ url('services') }}">Services</a></li>
                        <li class="menu-item-has-children">
                            <a href="#">Company</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('about') }}">About us</a></li>
                                <li><a href="{{ url('terms') }}">Terms of use</a></li>
                                <li><a href="{{ url('legal') }}">Legal</a></li>
                                <li><a href="{{ url('faq') }}">FAQ</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('contact') }}">Contact</a></li>
                    </ul>
                </div><!-- end of nav-collapse -->
                <div class="search-social">
                    <div class="social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- end of container -->
        </nav>
    </header>
    <!-- end of header -->

    @yield('content')

    <!-- start site-footer -->
    <footer class="site-footer">
        <div class="upper-footer">
            <div class="container">
                <div class="row">
                    <div class="col col-md-4 col-sm-6">
                        <div class="widget about-widget">
                            <div class="footer-logo">
                                <img src="{{ asset('main/assets/images/footer-logo.png') }}" alt></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                            <ul class="contact-info">
                                <li><i class="fa fa-phone"></i> +123 (4567) 890  </li>
                                <li><i class="fa fa-envelope"></i> info@apexdigitalchain.com</li>
                                <li><i class="fa fa-home"></i> 380 St Kilda Road, Melbourne VIC 3004, Australia</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col col-md-2 col-sm-6">
                        <div class="widget links-widget">
                            <h3>Links</h3>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col col-md-3 col-sm-6">
                        <div class="widget support-widget">
                            <h3>Support</h3>
                            <ul>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Submit a Ticket</a></li>
                                <li><a href="#">Visit Knowledge Base</a></li>
                                <li><a href="#">Support System</a></li>
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">Professional Services</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col col-md-3 col-sm-6">
                        <div class="widget twitter-feed-widget">
                            <h3>Twitter Feed</h3>
                            <ul>
                                <li>
                                    <div class="text">
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. Ed quia con sequuntur magni dolores.</p>
                                    </div>
                                    <div class="info-box">
                                        <i class="fa fa-twitter"></i>
                                        <strong><a href="#">@Mark Wahlberg</a></strong>
                                    </div>
                                </li>
                                <li>
                                    <div class="text">
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. Ed quia con sequuntur magni dolores.</p>
                                    </div>
                                    <div class="info-box">
                                        <i class="fa fa-twitter"></i>
                                        <strong><a href="#">@Mark Wahlberg</a></strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end upper-footer -->
        <div class="copyright-info">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-6">
                        <div class="copyright-area">
                            <p>{{ date('Y') }} &copy; All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col col-xs-6">
                        <div class="footer-social">
                            <span>Follow us: </span>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end site-footer -->
</div>
<!-- end of page-wrapper -->



<!-- All JavaScript files
================================================== -->
{{--<script src="{{ asset('main/assets/js/jquery.min.js') }}"></script>--}}

<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

<script src="{{ asset('main/assets/js/bootstrap.min.js') }}"></script>

<!-- Plugins for this template -->
<script src="{{ asset('main/assets/js/jquery-plugin-collection.js') }}"></script>

<!-- Custom script for this template -->
<script src="{{ asset('main/assets/js/script.js') }}"></script>
</body>

</html>
