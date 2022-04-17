@extends('layouts.main')

@section('title')
Home
@endsection

@section('content')

    <!-- start of hero -->
    <section class="hero hero-style-1 hero-slider-wrapper">
        <div class="hero-slider">
            <div class="slide">
                <img src="{{ asset('main/assets/images/slider/slide-1.jpg') }}" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-8 col-sm-9 slide-caption">
                            <h2>We are your financial solution</h2>
                            <p>A trusted destination for traders worldwide, Authorised by FCA, ASIC & FSCA</p>
                            <div class="btns">
                                <a href="{{ url('about') }}" class="theme-btn">About us</a>
                                <a href="{{ url('services') }}" class="theme-btn-s2">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide">
                <img src="{{ asset('main/assets/images/slider/slide-2.jpg') }}" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-8 col-sm-9 slide-caption">
                            <h2>We are your financial solution</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <div class="btns">
                                <a href="#" class="theme-btn">About us</a>
                                <a href="#" class="theme-btn-s2">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide">
                <img src="{{ asset('main/assets/images/slider/slide-3.jpg') }}" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-8 col-sm-9 slide-caption">
                            <h2>We are your financial solution</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <div class="btns">
                                <a href="#" class="theme-btn">About us</a>
                                <a href="#" class="theme-btn-s2">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of hero slider -->

    <section class="projects-section-s2 section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-6">
                    <div class="projects-grid">
                        <div class="grid">
                            <div class="inner">
                                <div class="img-holder">
                                    <img src="{{ asset('main/assets/images/projects/img-1.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="inner">
                                <div class="img-holder">
                                    <img src="{{ asset('main/assets/images/projects/img-2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="inner">
                                <div class="img-holder">
                                    <img src="{{ asset('main/assets/images/projects/img-3.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="inner">
                                <div class="img-holder">
                                    <img src="{{ asset('main/assets/images/projects/img-4.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="inner">
                                <div class="img-holder">
                                    <img src="{{ asset('main/assets/images/projects/img-5.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="inner">
                                <div class="img-holder">
                                    <img src="{{ asset('main/assets/images/projects/img-6.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
                <div class="col col-md-6">
                    <div class="section-title-s5">
                        <h2>Apex Digital Chain</h2>
                        <p>After gaining knowledge and experience for years our mission was apparent, we needed to clear a path for small to mid-sized investors to smarter innovative trading and increased profits.<br>
                            Cryptocurrency market is developing in a rapid pace and is one of promising options of economy. To that end we provide support to our investors with a stable and easy-to-use technology built to manage their investment, from trading to making profits. Margin traders are not left behind in this.</p>
                        <div class="skill-progress-bar">
                            <div class="skills">
                                <div class="skill">
                                    <h6>Finance</h6>
                                    <div class="progress">
                                        <div class="progress-bar appeared" data-percent="85" style="width: 85%;"><span>85%</span></div>
                                    </div>
                                </div>
                                <div class="skill">
                                    <h6>Business</h6>
                                    <div class="progress">
                                        <div class="progress-bar appeared" data-percent="98" style="width: 98%;"><span>98%</span></div>
                                    </div>
                                </div>
                                <div class="skill">
                                    <h6>Investment</h6>
                                    <div class="progress">
                                        <div class="progress-bar appeared" data-percent="92" style="width: 92%;"><span>92%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="{{ url('about') }}"
                           class="more-work">About us <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>

    <!-- start pricing-section -->
    <section class="pricing-pg-section pricing-section section-padding about-section-s4">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="pricing-grids pricing-slider">
                        <div class="grid">
                            <div class="pricing-header">
                                <p class="type">Starter</p>
                                <h3>$559</h3>
                                <p class="duration">per consulting</p>
                            </div>
                            <div class="pricing-body">
                                <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit sed Do eiusmod tem incid ut aliquip id Ut labore et dolore mana</p>
                                <a href="#" class="theme-btn">Start plan</a>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="pricing-header">
                                <p class="type">Starter</p>
                                <h3>$559</h3>
                                <p class="duration">per consulting</p>
                            </div>
                            <div class="pricing-body">
                                <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit sed Do eiusmod tem incid ut aliquip id Ut labore et dolore mana</p>
                                <a href="#" class="theme-btn">Start plan</a>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="pricing-header">
                                <p class="type">Starter</p>
                                <h3>$559</h3>
                                <p class="duration">per consulting</p>
                            </div>
                            <div class="pricing-body">
                                <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit sed Do eiusmod tem incid ut aliquip id Ut labore et dolore mana</p>
                                <a href="#" class="theme-btn">Start plan</a>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="pricing-header">
                                <p class="type">Starter</p>
                                <h3>$559</h3>
                                <p class="duration">per consulting</p>
                            </div>
                            <div class="pricing-body">
                                <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit sed Do eiusmod tem incid ut aliquip id Ut labore et dolore mana</p>
                                <a href="#" class="theme-btn">Start plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end pricing-section -->

    <!-- start services-section -->
    <section class="services-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="section-title">
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col col-xs-12">
                    <div class="service-grids">
                        <div class="grid">
                            <div class="img-details-link">
                                <div class="details-link">
                                    <a href="#"><i class="fa fa-arrow-right"></i></a>
                                </div>
                                <img src="{{ asset('main/assets/images/services/img-1.jpg') }}" alt>
                            </div>
                            <div class="service-details">
                                <h3>Cryptocurrencies</h3>
                                <p>Cryptocurrency is the future and with awesome rates and the best trading team, we help grow your crypto currencies with diversified portfolios across various market.</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-details-link">
                                <div class="details-link">
                                    <a href="#"><i class="fa fa-arrow-right"></i></a>
                                </div>
                                <img src="{{ asset('main/assets/images/services/img-2.jpg') }}" alt>
                            </div>
                            <div class="service-details">
                                <h3>Options Trading</h3>
                                <p>We offer the best Forex and Options trading services operating closely with an expert team.</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-details-link">
                                <div class="details-link">
                                    <a href="#"><i class="fa fa-arrow-right"></i></a>
                                </div>
                                <img src="{{ asset('main/assets/images/services/img-3.jpg') }}" alt>
                            </div>
                            <div class="service-details">
                                <h3>Asset Management</h3>
                                <p>With the best team of Financial and asset managers, you are assured on important projects, construction, contracts, and other assets. We invests pooled funds from clients, putting the capital to work through different investments including stocks, bonds, real estate, master limited partnerships, and more.</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-details-link">
                                <div class="details-link">
                                    <a href="#"><i class="fa fa-arrow-right"></i></a>
                                </div>
                                <img src="{{ asset('main/assets/images/services/img-4.jpg') }}" alt>
                            </div>
                            <div class="service-details">
                                <h3>Commodities</h3>
                                <p>A commodity is a basic of good used in commerce that is interchangeable with other commodities or known currencies. We offer the best the market has to offer and always put our customers first in all decisions.</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-details-link">
                                <div class="details-link">
                                    <a href="#"><i class="fa fa-arrow-right"></i></a>
                                </div>
                                <img src="{{ asset('main/assets/images/services/img-5.jpg') }}" alt>
                            </div>
                            <div class="service-details">
                                <h3>Funds Management</h3>
                                <p>Our team can be found working in fund management with mutual funds, pension funds, trust funds, and hedge funds. Our managers generally oversee mutual funds or pensions and manage their direction. study trends in the market, analyze economic data, and stay current on company news.</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-details-link">
                                <div class="details-link">
                                    <a href="#"><i class="fa fa-arrow-right"></i></a>
                                </div>
                                <img src="{{ asset('main/assets/images/services/img-6.jpg') }}" alt>
                            </div>
                            <div class="service-details">
                                <h3>Forex</h3>
                                <p>Options for investing cash including certificates of deposit and the money market funds. With CDs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end services-section -->

    <!-- start cta -->
    <section class="cta">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Why <span>us ?</span></h2>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end cta -->

    <!-- start services-section-s2 -->
    <section class="services-section-s2 section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-3">
                    <div class="services-phone">
                        <div class="phone-bg"></div>
                        <img src="{{ asset('main/assets/images/phone.png') }}" alt>
                        <div class="phone-inner">
                            <h3>Still have <span>confusion?</span></h3>
                            <p>Don’t worry. We don’t do rocket science</p>
                            <a href="{{ url('contact') }}" class="theme-btn-s2">Contact us</a>
                        </div>
                    </div>
                </div>

                <div class="col col-md-8 col-md-offset-1">
                    <div class="services-s2-grids">
                        <div class="grid">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fi flaticon-balance"></i>
                                </div>
                                <div class="details">
                                    <h3><a href="#">Constant Progression</a></h3>
                                    <p>Interest is applied to your account 24/7. Once it has been added to your account balance, you can either reinvest it to increase your daily profit, or you can withdraw it.</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fi flaticon-wallet"></i>
                                </div>
                                <div class="details">
                                    <h3><a href="#">Unique Platform</a></h3>
                                    <p>Our team has developed a unique platform for user-friendly and safe to work with investments.</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fi flaticon-calculator"></i>
                                </div>
                                <div class="details">
                                    <h3><a href="#">Quickly and Instantly</a></h3>
                                    <p>You can create your mutual fund</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end services-section-s2 -->

    <!-- start about-section -->
    <section class="section-padding about-section">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 col-md-10">
                    <div class="section-title-s2">
                        <h2>Cryptocurrency Metrics</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col col-md-12">
                    <div class="tradingview-widget-container" style="width: 100%; height: 600px;">
                        <iframe allowtransparency="true" style="box-sizing: border-box; height: calc(568px); width: 100%;" src="https://www.tradingview-widget.com/embed-widget/crypto-mkt-screener/?locale=en#%7B%22width%22%3A%22100%25%22%2C%22height%22%3A%22600%22%2C%22defaultColumn%22%3A%22overview%22%2C%22screener_type%22%3A%22crypto_mkt%22%2C%22displayCurrency%22%3A%22USD%22%2C%22colorTheme%22%3A%22light%22%2C%22market%22%3A%22crypto%22%2C%22enableScrolling%22%3Atrue%2C%22utm_source%22%3A%22phoenixbinaryinvestors.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22cryptomktscreener%22%7D" frameborder="0"></iframe>
                        <div class="tradingview-widget-copyright"></div>

                        <style>
                            .tradingview-widget-copyright {
                                font-size: 13px !important;
                                line-height: 32px !important;
                                text-align: center !important;
                                vertical-align: middle !important;
                                /* @mixin sf-pro-display-font; */
                                font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
                                color: #9db2bd !important;
                            }

                            .tradingview-widget-copyright .blue-text {
                                color: #2962FF !important;
                            }

                            .tradingview-widget-copyright a {
                                text-decoration: none !important;
                                color: #9db2bd !important;
                            }

                            .tradingview-widget-copyright a:visited {
                                color: #9db2bd !important;
                            }

                            .tradingview-widget-copyright a:hover .blue-text {
                                color: #1E53E5 !important;
                            }

                            .tradingview-widget-copyright a:active .blue-text {
                                color: #1848CC !important;
                            }

                            .tradingview-widget-copyright a:visited .blue-text {
                                color: #2962FF !important;
                            }
                        </style></div>
                </div>

            </div>
        </div> <!-- end container -->
    </section>
    <!-- end about-section -->

    <!-- start projects-section -->
    <section class="projects-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="section-title">
                        <h2>Our Best Works</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12 sortable-gallery">
                    <div class="gallery-filters projects-list">
                        <ul>
                            <li><a data-filter="*" href="#" class="current">All</a></li>
                            <li><a data-filter=".business" href="#">Business</a></li>
                            <li><a data-filter=".finance" href="#">Finance</a></li>
                            <li><a data-filter=".consulting" href="#">Consulting</a></li>
                            <li><a data-filter=".events" href="#">Events</a></li>
                        </ul>
                    </div>

                    <div class="gallery-container projects-grid">
                        <div class="grid business consulting">
                            <div class="inner">
                                <div class="img-holder">
                                    <img src="{{ asset('main/assets/images/projects/img-1.jpg') }}" alt>
                                </div>
                                <div class="details">
                                    <div class="details-inner">
                                        <ul>
                                            <li><a href="{{ asset('main/assets/images/projects/img-1.jpg') }}"
                                                   class="fancybox">
                                                    <i class="fa fa-search"></i></a></li>
                                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                                        </ul>
                                        <h3>Pied Piper</h3>
                                        <p class="cat">startup</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid business finance">
                            <div class="inner">
                                <div class="img-holder">
                                    <img src="{{ asset('main/assets/images/projects/img-2.jpg') }}" alt>
                                </div>
                                <div class="details">
                                    <div class="details-inner">
                                        <ul>
                                            <li><a href="{{ asset('main/assets/images/projects/img-2.jpg') }}"
                                                   class="fancybox"><i class="fa fa-search"></i></a></li>
                                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                                        </ul>
                                        <h3>Pied Piper</h3>
                                        <p class="cat">startup</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid events">
                            <div class="inner">
                                <div class="img-holder">
                                    <img src="{{ asset('main/assets/images/projects/img-3.jpg') }}" alt>
                                </div>
                                <div class="details">
                                    <div class="details-inner">
                                        <ul>
                                            <li><a href="{{ asset('main/assets/images/projects/img-3.jpg') }}"
                                                   class="fancybox"><i class="fa fa-search"></i></a></li>
                                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                                        </ul>
                                        <h3>Pied Piper</h3>
                                        <p class="cat">startup</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid event finance consulting">
                            <div class="inner">
                                <div class="img-holder">
                                    <img src="{{ asset('main/assets/images/projects/img-4.jpg') }}" alt>
                                </div>
                                <div class="details">
                                    <div class="details-inner">
                                        <ul>
                                            <li><a href="{{ asset('main/assets/images/projects/img-4.jpg') }}"
                                                   class="fancybox"><i class="fa fa-search"></i></a></li>
                                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                                        </ul>
                                        <h3>Pied Piper</h3>
                                        <p class="cat">startup</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid finance events business">
                            <div class="inner">
                                <div class="img-holder">
                                    <img src="{{ asset('main/assets/images/projects/img-5.jpg') }}" alt>
                                </div>
                                <div class="details">
                                    <div class="details-inner">
                                        <ul>
                                            <li><a href="{{ asset('main/assets/images/projects/img-5.jpg') }}"
                                                   class="fancybox">
                                                    <i class="fa fa-search"></i></a></li>
                                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                                        </ul>
                                        <h3>Pied Piper</h3>
                                        <p class="cat">startup</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid consulting finance business">
                            <div class="inner">
                                <div class="img-holder">
                                    <img src="{{ asset('main/assets/images/projects/img-6.jpg') }}" alt>
                                </div>
                                <div class="details">
                                    <div class="details-inner">
                                        <ul>
                                            <li><a href="{{ asset('main/assets/images/projects/img-6.jpg') }}"
                                                   class="fancybox"><i class="fa fa-search"></i></a></li>
                                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                                        </ul>
                                        <h3>Pied Piper</h3>
                                        <p class="cat">startup</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid events consulting">
                            <div class="inner">
                                <div class="img-holder">
                                    <img src="{{ asset('main/assets/images/projects/img-7.jpg') }}" alt>
                                </div>
                                <div class="details">
                                    <div class="details-inner">
                                        <ul>
                                            <li><a href="{{ asset('main/assets/images/projects/img-7.jpg') }}"
                                                   class="fancybox"><i class="fa fa-search"></i></a></li>
                                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                                        </ul>
                                        <h3>Pied Piper</h3>
                                        <p class="cat">startup</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid business finance">
                            <div class="inner">
                                <div class="img-holder">
                                    <img src="{{ asset('main/assets/images/projects/img-8.jpg') }}" alt>
                                </div>
                                <div class="details">
                                    <div class="details-inner">
                                        <ul>
                                            <li><a href="{{ asset('main/assets/images/projects/img-8.jpg') }}"
                                                   class="fancybox"><i class="fa fa-search"></i></a></li>
                                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                                        </ul>
                                        <h3>Pied Piper</h3>
                                        <p class="cat">startup</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end projects-section -->

    <!-- start partners-section -->
    <section class="partners-section">
        <h2 class="hidden">Partners</h2>
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="partners-slider">
                        <div class="grid">
                            <img src="{{ asset('main/assets/images/partners/img-1.png') }}" alt>
                        </div>
                        <div class="grid">
                            <img src="{{ asset('main/assets/images/partners/img-2.png') }}" alt>
                        </div>
                        <div class="grid">
                            <img src="{{ asset('main/assets/images/partners/img-3.png') }}" alt>
                        </div>
                        <div class="grid">
                            <img src="{{ asset('main/assets/images/partners/img-4.png') }}" alt>
                        </div>
                        <div class="grid">
                            <img src="{{ asset('main/assets/images/partners/img-5.png') }}" alt>
                        </div>
                        <div class="grid">
                            <img src="{{ asset('main/assets/images/partners/img-3.png') }}" alt>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end partners-section -->

    <!-- start testimonials-section -->
    <section class="testimonials-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="section-title">
                        <h2>Testimonials</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-lg-10 col-lg-offset-1">
                    <div class="testimonials-slider testimonials-grids">
                        <div class="grid">
                            <div class="client-pic">
                                <img src="{{ asset('main/assets/images/testimonials/img-1.jpg') }}" alt>
                            </div>
                            <div class="details">
                                <h4>Monica Hall</h4>
                                <span class="client-post">CEO, Bream-Hall Partners</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="client-pic">
                                <img src="{{ asset('main/assets/images/testimonials/img-2.jpg') }}" alt>
                            </div>
                            <div class="details">
                                <h4>Jared Dunn</h4>
                                <span class="client-post">CEO, Bream-Hall Partners</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="client-pic">
                                <img src="{{ asset('main/assets/images/testimonials/img-1.jpg') }}" alt>
                            </div>
                            <div class="details">
                                <h4>Monica Hall</h4>
                                <span class="client-post">CEO, Bream-Hall Partners</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end testimonials-section -->


    <!-- start newsletter-section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 col-md-7">
                    <h2><span>Subscribe your email</span> for our Newsletter</h2>
                    <form>
                        <div>
                            <input type="text" class="form-control">
                            <button>Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="newsletter-man">
                <img src="{{ asset('main/assets/images/newsletter-man.png') }}" alt>
            </div>
        </div> <!-- end contianer -->
    </section>
    <!-- end newsletter-section -->


    <!-- start blog-section -->
    <section class="blog-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8 col-md-offset-2">
                    <div class="section-title-s3">
                        <h2>Recent News</h2>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
            <div class="row news-grids">
                <div class="col col-md-4 col-xs-6">
                    <div class="grid">
                        <div class="entry-media">
                            <img src="{{ asset('main/assets/images/blog/img-1.jpg') }}" alt>
                        </div>
                        <div class="entry-body">
                            <div class="entry-header">
                                <span class="date">16 Hours ago</span>
                                <h3><a href="#">Cut corporate taxes to boost growth</a></h3>
                            </div>
                            <div class="entry-details">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                            <div class="entry-meta">
                                <a href="#" class="read-more">Read More</a>
                                <a href="#" class="comments"><i class="fa fa-comments"></i> 10 Comments</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-md-4 col-xs-6">
                    <div class="grid">
                        <div class="entry-media">
                            <img src="{{ asset('main/assets/images/blog/img-2.jpg') }}" alt>
                        </div>
                        <div class="entry-body">
                            <div class="entry-header">
                                <span class="date">16 Hours ago</span>
                                <h3><a href="#">European firms look to Canada to grow assets</a></h3>
                            </div>
                            <div class="entry-details">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                            <div class="entry-meta">
                                <a href="#" class="read-more">Read More</a>
                                <a href="#" class="comments"><i class="fa fa-comments"></i> 10 Comments</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-md-4 col-xs-6">
                    <div class="grid">
                        <div class="entry-media">
                            <img src="{{ asset('main/assets/images/blog/img-3.jpg') }}" alt>
                        </div>
                        <div class="entry-body">
                            <div class="entry-header">
                                <span class="date">16 Hours ago</span>
                                <h3><a href="#">British drinkers leave Molson Coors thirsty</a></h3>
                            </div>
                            <div class="entry-details">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                            <div class="entry-meta">
                                <a href="#" class="read-more">Read More</a>
                                <a href="#" class="comments"><i class="fa fa-comments"></i> 10 Comments</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end blog-section -->

@endsection
