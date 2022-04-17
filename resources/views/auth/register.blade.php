@extends('layouts.main')

@section('title')
    Sign up
@endsection

@section('top-assets')
    <script src="{{ asset('js/countries.js') }}" type="text/javascript"></script>
@endsection

@section('content')
    <div class="breadcrumb-area" style="background-image:url('{{ asset('images/bg/1.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h1 class="page-title">Sign up</h1>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Sign up</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-message-area bg-grey-2 pd-top-70 pd-bottom-70">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="contact-form">
                        @include('includes.alerts')
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row" style="margin-bottom: 10px;">

                                <div class="col-md-4">
                                    <div class="single-input-wrap style-2 input-group">
                                        <label>Full Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror"
                                               type="text" name="name" value="{{ old('name') }}"
                                               placeholder="Your Name *" required>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-4">
                                    <div class="single-input-wrap style-2 input-group">
                                        <label>Email</label>
                                        <input class="form-control @error('email') is-invalid @enderror"
                                               type="text" name="email" value="{{ old('email') }}"
                                               placeholder="Email Address *" required>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-4">
                                    <div class="single-input-wrap style-2 input-group">
                                        <label>Mobile Number</label>
                                        <input class="form-control @error('mobile') is-invalid @enderror"
                                               type="tel" name="mobile" value="{{ old('mobile') }}"
                                               placeholder="Mobile Number">
                                        @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->
                            </div>

                            <div class="row" style="margin-bottom: 10px;">

                                <div class="col-md-6">
                                    <div class="single-input-wrap style-2 input-group">
                                        <label>Referer (Referer address, Optional)</label>
                                        <input class="form-control @error('referer') is-invalid @enderror"
                                               type="text" name="referer" maxlength="150" value="{{ old('referer') }}"
                                               placeholder="Your Referer (Optional)">
                                        @error('referer')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-3">
                                    <div class="single-input-wrap style-2 input-group">
                                        <label>Image</label>
                                        <input class="form-control @error('image') is-invalid @enderror"
                                               type="file" name="image">
                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-3">
                                    <div class="single-input-wrap style-2 input-group">
                                        <label>Valid Government Issued ID</label>
                                        <input class="form-control @error('valid_id') is-invalid @enderror"
                                               type="file" name="valid_id">
                                        @error('valid_id')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->

                            </div>

                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-md-6">
                                    <div class="single-input-wrap style-2 input-group">
                                        <label>Password</label>
                                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" autocomplete="new-password" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6">
                                    <div class="single-input-wrap style-2 input-group">
                                        <label>Confirm Password</label>
                                        <input class="form-control" type="password" name="password_confirmation"
                                               autocomplete="new-password" placeholder="Confirm Password" required>
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->
                            </div>

                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-md-6">
                                    <div class="single-input-wrap style-2 input-group">
                                        <label>Bitcoin Wallet Address (Optional)</label>
                                        <input class="form-control @error('bitcoin_wallet') is-invalid @enderror"
                                               type="text" name="bitcoin_wallet" value="{{ old('bitcoin_wallet') }}">
                                        @error('bitcoin_wallet')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-6">
                                    <div class="single-input-wrap style-2 input-group">
                                        <label>Ethereum Wallet Address (Optional)</label>
                                        <input class="form-control @error('ethereum_wallet') is-invalid @enderror"
                                               type="text" name="ethereum_wallet" value="{{ old('ethereum_wallet') }}">
                                        @error('ethereum_wallet')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-12 -->

                            </div>

                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-md-4">
                                    <div class="single-input-wrap style-2 input-group">
                                        <label>Country</label>
                                        <input class="form-control @error('country') is-invalid @enderror" type="text"
                                               name="country" value="{{ old('country') }}"
                                               placeholder="Your Country *" required>
                                        @error('country')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-4">
                                    <div class="single-input-wrap style-2 input-group">
                                        <label>State</label>
                                        <input class="form-control @error('state') is-invalid @enderror" type="text"
                                               name="state" value="{{ old('state') }}"
                                               placeholder="Your State *" required>
                                        @error('state')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->

                                <script language="javascript">
                                    populateCountries("country", "state");
                                    populateCountries("country2");
                                </script>

                                <div class="col-md-4">
                                    <div class="single-input-wrap style-2 input-group">
                                        <label>Address</label>
                                        <input class="form-control @error('address') is-invalid @enderror" type="text"
                                               name="address" placeholder="Address" value="{{ old('address') }}">
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-12">
                                    <div class="submit-area text-center">
                                        <button type="submit" class="btn btn-pink">
                                            SUBMIT <i class="la la-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
