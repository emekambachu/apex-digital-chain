@extends('layouts.main')

@section('title')
    About
@endsection

@section('content')
    <div class="breadcrumb-area" style="background-image:url('{{ asset('images/bg/1.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h1 class="page-title">About Us </h1>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about-Area Start-->
    <section class="about-area pd-top-96 pd-bottom-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section-title section-title-2">
                        <h6 class="sub-title">Apex Digital Chain</h6>
                        <h2 class="title"><span>About</span> us</h2>
                    </div>
                </div>
                <div class="col-lg-7 align-self-center">
                    <p>After gaining knowledge and experience for years our mission was apparent, we needed to clear a path for small to mid-sized investors to smarter innovative trading and increased profits. Cryptocurrency market is developing in a rapid pace and is one of promising options of economy.<br>
                        To that end we provide support to our investors with a stable and easy-to-use technology built to manage their investment, from trading to making profits. Margin traders are not left behind in this.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="about-video-wrap">
                        <div class="thumb">
                            <img src="{{ asset('main/img/about/bg.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="about-nav-pills">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#pills-support">
                                <span class="thumb">
                                    <img src="{{ asset('main/img/about/1.png') }}" alt="img">
                                </span> VALUES
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#pills-comunication">
                                <span class="thumb">
                                    <img src="{{ asset('main/img/about/2.png') }}" alt="img">
                                </span> MISSION
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#pills-delivery">
                                <span class="thumb">
                                    <img src="{{ asset('main/img/about/3.png') }}" alt="img">
                                </span> PARTNERSHIPS
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="pills-support">
                                <p>Apex Digital Chain was founded on the principle of delivering superior long and short term returns at the lowest possible risk. DMI believes that having a world-class investor base of like-minded, high-quality organizations is key to investment success.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-comunication">
                                <p>Offering comprehensive and flexible assets to investors within the Cryptocurrency market, with low friction, transparency and reliability and with highest possible return on investment.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-delivery">
                                <p>We have built partnerships overtime with other successful companies with complimenting corporate and social goals as our company.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="message-wrap text-center">
                        <h6 class="title">Get Advisor for consultations</h6>
                        <form class="message-form-wrap">
                            <p>Dapibus voluptatem taciti curtur! Fuga aliquet ad quas justo at ullam </p>
                            <div class="single-input-wrap input-group">
                                <label>FULL NAME</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="single-input-wrap input-group">
                                <label>EMAIL ADDRESS</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="single-input-wrap input-group">
                                <label>WRITE SOMETHING</label>
                                <textarea class="form-control" rows="4" name="note"></textarea>
                            </div>
                            <div class="submit-area text-center">
                                <button type="submit" class="btn btn-pink w-100">SEND YOUR MESSAGE</button>
                            </div>
                        </form>
                    </div>
                    <div class="about-contact-wrap">
                        <img src="{{ asset('main/img/icon/phone.png') }}" alt="img">
                        <h6>Call Us: +1(631)343-5226</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-Area End-->

    <section class="client-area text-center pd-top-88 pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title section-title-2 text-center">
                        <h2 class="title">Our Guiding Principles</h2>
                        <p>Put the interests of DTO’s investors first in everything the firm does. Acting as a fiduciary is a sacred trust that can never be broken.<br>
                            Act with the highest level of integrity in every action DTO takes. The firm’s reputation is its most important asset. Approach public investing with the same philosophy as if purchasing entire companies, by acquiring high-quality businesses that generate large amounts of compounding free cash flow at prices well below their intrinsic value.<br>
                            Focus on building a world-class team and culture. The firm cares deeply about being regarded in the industry as first rate and as the best at every touch point. Communicate with investment partners candidly and be as transparent as required for them to always understand what DMI is doing and why.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- industries-Area Start-->
    <section class="industries-area bg-grey-2 pd-top-96 pd-bottom-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title section-title-2 text-center">
                        <h6 class="sub-title">Industries</h6>
                        <h2 class="title">Our Industries Features</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-industries-wrap">
                        <div class="media">
                            <div class="thumb">
                                <img src="{{ asset('main/img/industries/1.png') }}" alt="img">
                            </div>
                            <div class="single-industries-details media-body">
                                <a href="#"><i class="fa fa-ellipsis-v float-right"></i></a>
                                <h6><a href="">Constant Progression</a></h6>
                                <p>Interest is applied to your account 24/7. Once it has been added to your account balance, you can either reinvest it to increase your daily profit, or you can withdraw it.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-industries-wrap">
                        <div class="media">
                            <div class="thumb">
                                <img src="{{ asset('main/img/industries/1.png') }}" alt="img">
                            </div>
                            <div class="single-industries-details media-body">
                                <a href="#"><i class="fa fa-ellipsis-v float-right"></i></a>
                                <h6><a href="">Unique Platform</a></h6>
                                <p>Our team has developed a unique platform for user-friendly and safe to work with investments.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-industries-wrap">
                        <div class="media">
                            <div class="thumb">
                                <img src="{{ asset('main/img/industries/2.png') }}" alt="img">
                            </div>
                            <div class="single-industries-details media-body">
                                <a href="#"><i class="fa fa-ellipsis-v float-right"></i></a>
                                <h6><a href="">Quickly and Instantly</a></h6>
                                <p>You can create your mutual fund</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- industries-Area End-->
@endsection
