@extends('layouts.auth')

@section('title', 'Register')

@section('content')
    <!-- login page start-->
    <div class="authentication-main">
        <div class="row">
            <div class="col-md-12">
                <div class="auth-innerright">
                    <div class="authentication-box" style="width: 750px !important;">
                        <div class="text-center"><img src="{{ asset('assets/images/logo.png') }}" alt=""></div>
                        <div class="card mt-4">
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <h4>ADMIN REGISTRATION</h4>
                                </div>
                                <form class="theme-form" method="post" id="login-form" action="{{ route('guardian.submit.register') }}">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="client"
                                                   class="col-form-label">{{ __('School') }}</label>
                                            <select name="client_id" id="client_id"
                                                    class="form-control @error('client_id') is-invalid @enderror">
                                                <option value="">----- Select School -----</option>
                                                @foreach(_clients() as $client)
                                                    <option
                                                        value="{{ $client->id }}" {{ old('client_id') == $client->name ? 'selected' : '' }}>{{ $client->name }}</option>
                                                @endforeach
                                            </select>
                                            @include('includes.partials.error', ['field' => 'client_id'])
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="first_name"
                                                   class="col-form-label ">{{ __('First Name') }}</label>
                                            <input id="first_name" type="text" name="first_name"
                                                   class="form-control @error('first_name') is-invalid @enderror"
                                                   value="{{ old('first_name') }}"  autocomplete="first_name"
                                                   autofocus>
                                            @include('includes.partials.error', ['field' => 'first_name'])
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="last_name"
                                                   class="col-form-label ">{{ __('Last Name') }}</label>
                                            <input id="last_name" type="text" name="last_name"
                                                   class="form-control @error('last_name') is-invalid @enderror"
                                                   value="{{ old('last_name') }}"  autocomplete="last_name"
                                                   autofocus>
                                            @include('includes.partials.error', ['field' => 'last_name'])
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="gender" class="col-form-label ">{{ __('Gender') }}</label>
                                            <select name="gender" id="gender"
                                                    class="form-control @error('gender') is-invalid @enderror">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            @include('includes.partials.error', ['field' => 'gender'])
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="email"
                                                   class="col-form-label">{{ __('E-Mail Address') }}</label>
                                            <input id="email" type="email" name="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   value="{{ old('email') }}"  autocomplete="email" autofocus>
                                            @include('includes.partials.error', ['field' => 'email'])
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="password" class="col-form-label">{{ __('Password') }}</label>
                                            <input id="password" type="password" name="password"
                                                   class="form-control @error('password') is-invalid @enderror"
                                                    autocomplete="new-password">
                                            @include('includes.partials.error', ['field' => 'password'])
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="password_confirmation"
                                                   class="col-form-label">{{ __('Confirm Password') }}</label>
                                            <input id="password_confirmation" type="password"
                                                   name="password_confirmation"
                                                   class="form-control"  autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label for="address" class="col-form-label ">{{ __('Address') }}</label>
                                        <input id="address" type="text" name="address"
                                               class="form-control @error('address') is-invalid @enderror"
                                               value="{{ old('address') }}"  autocomplete="address" autofocus>
                                        @include('includes.partials.error', ['field' => 'address'])
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3 mb-3">
                                            <label for="suite" class="col-form-label ">{{ __('Suite') }}</label>
                                            <input id="suite" type="text" name="suite"
                                                   class="form-control @error('suite') is-invalid @enderror"
                                                   value="{{ old('suite') }}" autocomplete="suite" autofocus>
                                            @include('includes.partials.error', ['field' => 'suite'])
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="city" class="col-form-label ">{{ __('City') }}</label>
                                            <input id="city" type="text" name="city"
                                                   class="form-control @error('city') is-invalid @enderror"
                                                   value="{{ old('city') }}"  autocomplete="city" autofocus>
                                            @include('includes.partials.error', ['field' => 'city'])
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="country" class="col-form-label ">Country</label>
                                            <select name="country_id" class="form-control" id="country_id">
                                                <option value="106">Jamaica</option>
                                                @foreach(_countries() as $country)
                                                    <option
                                                        value="{{ $country->id }}" {{ old('country_id') == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                            @include('includes.partials.error', ['field' => 'country_id'])
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="state" class="col-form-label ">State</label>
                                            <select name="state_id" class="form-control" id="state_id">
                                                <option value="1645">Kingston Parish</option>
                                                @foreach(_states() as $state)
                                                    <option
                                                        value="{{ $state->id }}" {{ old('state_id') == $state->id ? 'selected' : '' }}>{{ $state->name }}</option>
                                                @endforeach
                                            </select>
                                            @include('includes.partials.error', ['field' => 'state_id'])
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="zip" class="col-form-label ">{{ __('Zip Code') }}</label>
                                            <input id="zip" type="text" name="zip"
                                                   class="form-control @error('zip') is-invalid @enderror"
                                                   value="{{ old('zip') }}"  autocomplete="zip" autofocus>
                                            @include('includes.partials.error', ['field' => 'zip'])
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="phone" class="col-form-label ">{{ __('Mobile') }}</label>
                                            <input id="phone" type="tel" name="phone"
                                                   class="form-control @error('phone') is-invalid @enderror"
                                                   value="{{ old('phone') }}"  autocomplete="phone" autofocus>
                                            @include('includes.partials.error', ['field' => 'phone'])
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="cnic" class="col-form-label ">{{ __('National ID Card #') }}</label>
                                            <input id="cnic" type="text" name="cnic"
                                                   class="form-control @error('cnic') is-invalid @enderror"
                                                   value="{{ old('cnic') }}"  autocomplete="cnic" autofocus>
                                            @include('includes.partials.error', ['field' => 'cnic'])
                                        </div>
                                    </div>
                                    <div class="form-group form-row mt-3 mb-0">
                                        <button class="btn btn-primary btn-block" type="submit">Register</button>
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
