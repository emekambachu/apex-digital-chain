@extends('layouts.main')

@section('title')
    Sign up
@endsection

@section('top-assets')
    <script src="{{ asset('js/countries.js') }}" type="text/javascript"></script>
    {!! NoCaptcha::renderJs() !!}
@endsection

@section('content')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Register</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Register</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>

    <section class="contact-section section-padding" style="background-color: #eeeeee;">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="contact-form">
                        @include('includes.alerts')
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data"
                              class="form row contact-validation-active">
                            @csrf
                            <div class="row" style="margin-bottom: 10px;">

                                <div class="col-md-4">
                                    <div class="">
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
                                    <div class="">
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
                                    <div class="">
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
                                <div class="col-md-3">
                                    <div class="">
                                        <label>Age</label>
                                        <input class="form-control @error('age') is-invalid @enderror"
                                               type="number" name="age" min="18" value="{{ old('age') }}"
                                               placeholder="Age">
                                        @error('age')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-3">
                                    <div class="">
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
                                    <div class="">
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
                                    <div class="">
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
                                    <div class="">
                                        <label>Password</label>
                                        <input class="form-control @error('password') is-invalid @enderror"
                                               type="password" name="password" placeholder="Password"
                                               autocomplete="new-password" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6">
                                    <div class="">
                                        <label>Confirm Password</label>
                                        <input class="form-control" type="password" name="password_confirmation"
                                               autocomplete="new-password" placeholder="Confirm Password" required>
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->
                            </div>

                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-md-6">
                                    <div class="">
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
                                    <div class="">
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
                                    <div class="">
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
                                    <div class="">
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
                                    <div class="">
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

                                <div class="col-md-4">
                                    <div class="">
                                        <label>Captcha</label>
                                        {!! app('captcha')->display() !!}
                                        @if($errors->has('g-recaptcha-response'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                        @endif
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-12" style="margin-top: 10px;">
                                    <div class="submit-area text-center">
                                        <button type="submit" class="">SUBMIT</button>
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
