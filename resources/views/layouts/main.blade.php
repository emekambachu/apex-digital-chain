<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themexriver">

    <!-- Page Title -->
    <title> @yield('title') - Apex Digital Chain</title>

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
                            <div id="google_translate_element"></div>
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
{{--                                <li><a href="{{ url('faq') }}">FAQ</a></li>--}}
                            </ul>
                        </li>
                        <li><a href="{{ url('contact') }}">Contact</a></li>
                        <li><a style="color: #FDD415; font-weight: bolder; font-size: 16px;"
                               href="{{ route('login') }}">Login</a></li>
                        <li><a style="color: #FDD415; font-weight: bolder; font-size: 16px;"
                               href="{{ route('register') }}">Register</a></li>
                    </ul>
                </div><!-- end of nav-collapse -->

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
                    <div class="col-md-4">
                        <div class="widget about-widget">
                            <div class="footer-logo">
                                <img src="{{ asset('main/assets/images/footer-logo.png') }}" alt></div>
                            <ul class="contact-info">
                                <li><i class="fa fa-phone"></i> +123 (4567) 890  </li>
                                <li><i class="fa fa-envelope"></i> info@apexdigitalchain.com</li>
                                <li><i class="fa fa-home"></i> 380 St Kilda Road, Melbourne VIC 3004, Australia</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="widget links-widget">
                            <h3>Links</h3>
                            <ul>
                                <li><a href="{{ url('about') }}">About</a></li>
                                <li><a href="{{ url('terms') }}">Terms of use</a></li>
                                <li><a href="{{ url('legal') }}">Legal</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="widget support-widget">
                            <h3>Support</h3>
                            <ul>
                                <li><a href="{{ url('contact') }}">Contact Us</a></li>
                                <li><a href="{{ url('services') }}">Services</a></li>
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

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/625c232ab0d10b6f3e6df809/1g0ruio9p';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

</body>

</html>
