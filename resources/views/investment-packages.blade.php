@extends('layouts.main')

@section('title')
    Investment Plans
@endsection

@section('content')
    <div class="breadcrumb-area" style="background-image:url('{{ asset('images/bg/1.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h1 class="page-title">Investment Plans </h1>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Investment Plans</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="industries-area bg-grey-2 pd-top-96 pd-bottom-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title section-title-2 text-center">
                        <h6 class="sub-title">Investment packages</h6>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">

                @foreach($packages as $package)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-industries-wrap">
                            <div class="media">
                                <div class="thumb">
                                    <img src="{{ asset('main/img/industries/1.png') }}" alt="img">
                                </div>
                                <div class="single-industries-details media-body">
                                    <a href="#"><i class="fa fa-ellipsis-v float-right" aria-hidden="true"></i></a>
                                    <h6 style="color: #002E5B;"><a href="">{{ $package->name }}</a></h6>
                                    <div>
                                        @if(!empty($package->min))
                                            <p style="font-size: 18px; color: #DD1C63;">
                                                Minimum: {{ '$'.number_format($package->min) }}</p>
                                        @endif

                                        @if(!empty($package->max))
                                            <p style="font-size: 18px; color: #DD1C63;">
                                                Maximum: {{ '$'.number_format($package->max) }}</p>
                                        @else
                                            <p style="font-size: 18px; color: #DD1C63;">and above</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div>
                                <ul class="" style="list-style: none;">
                                    @if(!empty($package->monthly_profit))
                                        <li style="font-size: 15px;">Monthly Profit: {{ $package->monthly_profit }}%</li>
                                    @endif

                                    @if(!empty($package->option3))
                                        <li style="font-size: 15px;">{{ $package->option3 }}</li>
                                    @endif

                                    @if(!empty($package->roi))
                                        <li style="font-size: 15px;">ROI: {{ $package->roi }}%</li>
                                    @endif

                                    @if(!empty($package->referral_bonus))
                                        <li style="font-size: 15px;">Referral Bonus: {{ $package->referral_bonus }}%</li>
                                    @endif

                                    @if(!empty($package->expert_advice))
                                        <li style="font-size: 15px;">{{ $package->expert_advice }}</li>
                                    @endif

                                    @if(!empty($package->days_turnover))
                                        <li style="font-size: 15px;">Turn over: {{ $package->days_turnover }} days</li>
                                    @endif
                                </ul>
                            </div>
                            <a class="details-btn bg-primary text-white" href="{{ route('register') }}">Sign up<span>
                            <i class="la la-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
