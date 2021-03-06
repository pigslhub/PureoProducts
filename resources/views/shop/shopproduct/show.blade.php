@extends('admin.layouts.master')

@section('title', 'ShopType')

@section('breadcrumb-title', 'Shop Type')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Shop Type</li>
    <li class="breadcrumb-item active">Show</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <a href="{{ route('adminShopTypes.index') }}"><i class="fa fa-arrow-left"> Back to list</i></a>
                        <h5 class="text-center">ShopType</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto d-block">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="mb-5 mt-2">Title: <h4>{{ $shopType->type }}</h4></div>
                            <img src="{{asset('storage/'.$shopType->icon)}}" width="150" height="150" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
