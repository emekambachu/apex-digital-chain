@extends('layouts.main')

@section('title')
    About
@endsection

@section('content')

    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>About us</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>About us</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>

    <section class="projects-section-s2 section-padding" style="background-color:#fff;">
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
                                        <div class="progress-bar appeared"
                                             data-percent="85" style="width: 85%;"><span>85%</span></div>
                                    </div>
                                </div>
                                <div class="skill">
                                    <h6>Business</h6>
                                    <div class="progress">
                                        <div class="progress-bar appeared"
                                             data-percent="98" style="width: 98%;"><span>98%</span></div>
                                    </div>
                                </div>
                                <div class="skill">
                                    <h6>Investment</h6>
                                    <div class="progress">
                                        <div class="progress-bar appeared"
                                             data-percent="92" style="width: 92%;"><span>92%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>

    <section class="section-padding about-section-s5" style="background-color: #eeeeee;">
        <div class="container">

            <div class="row">
                <div class="col col-md-7">
                    <div class="about-details">
                        <h3>Mission</h3>
                        <p>Offering comprehensive and flexible assets to investors within the Cryptocurrency market, with low friction, transparency and reliability and with highest possible return on investment.</p>
                    </div>

                    <div class="about-details">
                        <h3>Values</h3>
                        <p>Apex Digital Chain was founded on the principle of delivering superior long and short term returns at the lowest possible risk. DMI believes that having a world-class investor base of like-minded, high-quality organizations is key to investment success.</p>
                    </div>

                    <div class="about-details">
                        <h3>Partnerships</h3>
                        <p>We have built partnerships overtime with other successful companies with complimenting corporate and social goals as our company.</p>
                    </div>
                </div>

                <div class="col col-md-5">
                    <div class="about-img">
                        <img src="{{ asset('images/about/1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>

    <section class="newsletter-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2><span>Our guiding</span> Principles</h2>
                   <p style="color: #fff; font-size: 15px; font-weight: bold;">
                       Put the interests of DTO’s investors first in everything the firm does. Acting as a fiduciary is a sacred trust that can never be broken.
                       Act with the highest level of integrity in every action DTO takes. The firm’s reputation is its most important asset. Approach public investing with the same philosophy as if purchasing entire companies, by acquiring high-quality businesses that generate large amounts of compounding free cash flow at prices well below their intrinsic value.
                       Focus on building a world-class team and culture. The firm cares deeply about being regarded in the industry as first rate and as the best at every touch point. Communicate with investment partners candidly and be as transparent as required for them to always understand what DMI is doing and why.
                   </p>
                </div>
            </div>
        </div> <!-- end contianer -->
    </section>


@endsection
