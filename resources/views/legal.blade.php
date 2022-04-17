@extends('layouts.main')

@section('title')
    Terms and Conditions
@endsection

@section('content')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Terms of use</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Terms of use</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>

    <section class="section-padding about-section-s5" style="background-color: #eeeeee;">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="about-details">
                        <p>The content provided on this website is for informational purposes only. Digital Trading Options is not responsible for, and explicitly disclaims, all liability for damages of any kind arising out of the use, reference to or reliance on any information contained within the website.
                            Although the Digital Trading Options website may include links with direct access to other internet resources / websites, it is not responsible for the accuracy or content of the information listed on these sites. Links from the Digital Trading Options website to third party websites do not constitute an endorsement by Digital Trading Options of those parties or their products and services.</p>
                    </div>

                </div>

            </div>
        </div> <!-- end container -->
    </section>
@endsection
