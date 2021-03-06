@extends('layouts.auth')
@section('title', 'Login')


@section('content')
    <!-- login page start-->
    <div class="authentication-main">
        <div class="row">
            <div class="col-md-12">
                <div class="auth-innerright">
                    <div class="authentication-box">
                        <div class="text-center"><img src="{{asset('assets/images/favicon.jpg')}}" alt=""></div>
                        <div class="text-center mt-3"><img src="{{asset('assets/images/logo.jpg')}}" alt=""></div>

                        <div class="card mt-4">
                            <div class="card-body">
                                <div class="text-center">
                                    <h4>CUSTOMER LOGIN</h4>
                                    <h6>Enter your Email and Password </h6>
                                </div>
                            <form class="theme-form" method="post" id="login-form" action="{{route('customer.login.submit')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email"
                                               class="col-form-label pt-0">E-Mail Address</label>
                                        <input id="email" type="email" name="email"
                                               class="form-control @error('email') is-invalid @enderror"
                                               value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-form-label">{{ __('Password') }}</label>
                                        <input id="password" type="password" name="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="checkbox p-0">
                                        <input type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    <div class="form-group form-row mt-3 mb-0">
                                        <button class="btn btn-primary btn-block" type="submit">Login</button>
                                        <div class="mt-3 w-100 text-center">Forgot password ? <a href="#">Reset Password</a></div>
                                    <div class="mt-3 w-100 text-center">Don't Have Account ? <a href="{{}}">Register Now</a></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login page end-->
@endsection
