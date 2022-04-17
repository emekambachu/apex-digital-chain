@extends('layouts.main')

@section('title')
    Investment Plans
@endsection

@section('content')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Investment Plans</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Investment Plans</li>
                    </ol>
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

                        @foreach($packages as $package)
                            <div class="grid">
                                <div class="pricing-header">
                                    <p class="type">{{ $package->name }}</p>
                                    @if(!empty($package->min))
                                        <h3 style="font-size: 18px;">
                                            Minimum: {{ '$'.number_format($package->min) }}</h3>
                                    @endif

                                    @if(!empty($package->max))
                                        <h3 style="font-size: 18px;">
                                            Maximum: {{ '$'.number_format($package->max) }}</h3>
                                    @else
                                        <h3 style="font-size: 18px;">and above</h3>
                                    @endif
                                </div>
                                <div class="pricing-body">
                                    @if(!empty($package->monthly_profit))
                                        <p style="font-size: 15px; margin: 1px 0;">Monthly Profit: {{ $package->monthly_profit }}%</p>
                                    @endif

                                    @if(!empty($package->option3))
                                        <p style="font-size: 15px; margin: 1px 0;">{{ $package->option3 }}</p>
                                    @endif

                                    @if(!empty($package->roi))
                                        <p style="font-size: 15px; margin: 1px 0;">ROI: {{ $package->roi }}%</p>
                                    @endif

                                    @if(!empty($package->referral_bonus))
                                        <p style="font-size: 15px; margin: 1px 0;">Referral Bonus: {{ $package->referral_bonus }}%</p>
                                    @endif

                                    @if(!empty($package->expert_advice))
                                        <p style="font-size: 15px; margin: 1px 0;">{{ $package->expert_advice }}</p>
                                    @endif

                                    @if(!empty($package->days_turnover))
                                        <p style="font-size: 15px; margin: 1px 0;">Turn over: {{ $package->days_turnover }} days</p>
                                    @endif
                                    <a href="{{ route('register') }}" class="theme-btn">Sign up</a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end pricing-section -->
@endsection
