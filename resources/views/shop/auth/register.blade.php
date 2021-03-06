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
                                    <h4>SHOP REGISTRATION</h4>
                                </div>
                                <form class="theme-form" method="post" id="login-form"
                                      action="{{ route('shop.submit.register') }}">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="first_name"
                                                   class="col-form-label ">{{ __('Name') }}</label>
                                            <input id="name" type="text" name="name"
                                                   class="form-control @error('name') is-invalid @enderror"
                                                   value="{{ old('name') }}" autocomplete="name"
                                                   autofocus>
                                            @include('includes.partials.error', ['field' => 'name'])
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="email"
                                                   class="col-form-label">{{ __('E-Mail Address') }}</label>
                                            <input id="email" type="email" name="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   value="{{ old('email') }}" autocomplete="email" autofocus>
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
                                                   class="form-control" autocomplete="new-password">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="shop_type_id"
                                                   class="col-form-label">{{ __('Shop Type') }}</label>
                                            <select name="shop_type_id" id="shop_type_id"
                                                    class="form-control @error('shop_type_id') is-invalid @enderror">
                                                <option value="">---Select---</option>
                                                <optgroup label="Shop Type">
                                                    @forelse (_getallShopTypes() as $shop_type)
                                                        <option value="{{$shop_type->id}}" {{ (collect(old('shop_type_id'))->contains($shop_type->id)) ? 'selected':'' }}>{{$shop_type->type}}</option>
                                                    @empty
                                                        <option value="">No Shop Type Available</option>
                                                    @endforelse
                                                </optgroup>
                                            </select>
                                            @include('includes.partials.error', ['field' => 'shop_type_id'])
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="zip_code"
                                                   class="col-form-label ">{{ __('Zip Code') }}</label>
                                            <input id="zip_code" type="test" name="zip_code"
                                                   class="form-control @error('zip_code') is-invalid @enderror"
                                                   value="{{ old('zip_code') }}" autocomplete="zip_code" autofocus>
                                            @include('includes.partials.error', ['field' => 'zip_code'])
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="commission"
                                                   class="col-form-label ">{{ __('Commission') }}</label>
                                            <input id="commission" type="number" name="commission"
                                                   class="form-control @error('commission') is-invalid @enderror"
                                                   value="{{ old('commission') }}" autocomplete="commission" autofocus>
                                            @include('includes.partials.error', ['field' => 'commission'])
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
