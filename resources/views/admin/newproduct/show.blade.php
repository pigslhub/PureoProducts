@extends('admin.layouts.master')

@section('title', 'ProductDetail')

@section('breadcrumb-title', 'Product Detail')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Product</li>
    <li class="breadcrumb-item active">Detail</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <h5 class="text-center">Product Detail</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div>Item: <h4>{{ $product->name }}</h4></div>
                        <div class="pull-right" style="position: absolute; top: 20px; right: 40px">
                            <img src="{{asset('storage/'.$product->icon)}}" alt="">
                        </div>
                    </div>
                    <div class="card-body" style="align-items: center">
                        <div class="col-md-12">

                            <div class="card shadow">
                                <div class="card-body">
                                    <h5>Description</h5>
                                    <p>{{ $product->description }}</p>
                                </div>
                            </div>

                            <div class="row" style="justify-content: center; align-items: center">
                                <div class="card shadow" style="margin-right: 20px">
                                    <div class="card-body text-center">
                                        <h5>Purchase Price</h5>
                                        <p>Rs. {{ $product->purchase_price }}</p>
                                    </div>
                                </div>
                                <div class="card shadow" style="margin-right: 20px">
                                    <div class="card-body text-center">
                                        <h5>Selling Price</h5>
                                        <p>Rs. {{ $product->selling_price }}</p>
                                    </div>
                                </div>
                                <div class="card shadow" style="margin-right: 20px">
                                    <div class="card-body text-center">
                                        <h5>Wholesale Price</h5>
                                        <p>Rs. {{ $product->wholesalePrice }}</p>
                                    </div>
                                </div>
                                <div class="card shadow">
                                    <div class="card-body text-center">
                                        <h5>Minimum Price</h5>
                                        <p>Rs. {{ $product->min_price }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="align-items: center; justify-content: center">
                                <div class="card shadow col-md-5" style="margin-right: 30px">
                                    <div class="card-body text-center">
                                        <h5>In Stock</h5>
                                        <p>{{ $product->in_stock }}</p>
                                    </div>
                                </div>
                                <div class="card shadow col-md-5">
                                    <div class="card-body text-center">
                                        <h5>Product Code</h5>
                                        <p>{{ $product->product_code }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
