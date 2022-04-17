@extends('layouts.main')

@section('title')
    Login
@endsection

@section('top-assets')
    <script src="{{ asset('js/countries.js') }}" type="text/javascript"></script>
@endsection

@section('content')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Login</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Login</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>

    <section class="contact-section section-padding" style="background-color: #eeeeee;">
        <div class="container">
            <div class="row">
                <div class="col-12">
{{--                    <div class="section-title-s4">--}}
{{--                        <h2>Login</h2>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua.</p>--}}
{{--                    </div>--}}
                    <div class="contact-form">
                        @include('includes.alerts')
                        <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data"
                              class="form row contact-validation-active">
                            @csrf
                            <div class="col col-sm-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col col-sm-6">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" id="password" name="password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col col-xs-12 submit-btn">
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>

@endsection
