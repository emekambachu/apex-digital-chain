@extends('layouts.main')

@section('title')
    Services
@endsection

@section('content')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Services</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Services</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>

    <!-- start services-section -->
    <section class="services-section section-padding">
        <div class="container">

            <div class="row">
                <div class="col col-xs-12">
                    <div class="service-grids">
                        <div class="grid">
                            <div class="img-details-link">
                                <div class="details-link">
                                    <a href="#"><i class="fa fa-arrow-right"></i></a>
                                </div>
                                <img src="{{ asset('images/services/cryptocurrencies.jpg') }}" alt>
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
                                <img src="{{ asset('images/services/options_trading.jpg') }}" alt>
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
                                <img src="{{ asset('images/services/asset_management.jpg') }}" alt>
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
                                <img src="{{ asset('images/services/forex.jpg') }}" alt>
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

    <section class="services-section-s3 section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8 col-md-offset-2">
                    <div class="section-title-s3">
                        <h2>How it works</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="services-s2-grids">
                        <div class="grid">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fi flaticon-balance"></i>
                                </div>
                                <div class="details">
                                    <h3><a href="#">Sign up</a></h3>
                                    <p>Sign up to our account and fill all relevant details including your bitcoin wallet address.</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fi flaticon-wallet"></i>
                                </div>
                                <div class="details">
                                    <h3><a href="#">Select Investment Package</a></h3>
                                    <p>Select investment package, create new investment and fund your wallet</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fi flaticon-calculator"></i>
                                </div>
                                <div class="details">
                                    <h3><a href="#">Get Paid</a></h3>
                                    <p>Receive payment with bonus, profit or commission.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
@endsection
