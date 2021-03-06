@extends('layouts.auth')

@section('content')
    <div class="auth-bg">
        <div class="row">
            <div class="col-md-12">
                <div class="auth-innerright">
                    <div class="authentication-box">
                        <div class="text-center mt-3"><img src="{{asset('assets/images/logo.png')}}" width="100" alt="">
                        </div>
                        <div class="card mt-4 shadow-lg">
                            <div class="card-body">
                                <div class="text-center">
                                    <h4>Reset Password</h4>
                                    <h6>Enter you email and new password</h6>
                                </div>
                                <form class="theme-form" method="POST" action="{{ route('admin.password.reset.submit') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <div class="form-group">
                                        <label for="email"
                                               class="col-form-label pt-0">{{ __('E-Mail Address') }}</label>
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
                                        <label for="password"
                                               class="col-form-label pt-0">{{ __('Password') }}</label>
                                        <input id="password" type="password" name="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               value="{{ old('password') }}" required autocomplete="password" autofocus>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password"
                                               class="col-form-label pt-0">{{ __('Confirm Password') }}</label>
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation"
                                               required>
                                    </div>
                                    <div class="form-group form-row mt-3 mb-0">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            {{ __('Reset Password') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
