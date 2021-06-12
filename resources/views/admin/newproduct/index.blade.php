@extends('admin.layouts.master')

@section('title', 'Product')

@section('breadcrumb-title', 'Product')

@section('breadcrumb-item')
    <li class="breadcrumb-item active">Product</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xl-6 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i class="fa fa-cubes" style="font-size: 30px"></i></div>
                            <div class="media-body"><span class="m-0">Total Products</span>
                                <h4 class="mb-0 counter">{{ $productsCount }}</h4><i class="icon-bg" data-feather="package"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-6 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i class="fa fa-money" style="font-size: 30px"></i></div>
                            <div class="media-body"><span class="m-0">Total Purchase</span>
                                <h4 class="mb-0 counter">{{ $totalPurchase }}</h4><i class="icon-bg" data-feather="dollar-sign"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="pull-left">Products List</h5>
                        <div class=" pull-right">
                            <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm px-2"><i
                                    class="fa fa-plus"></i> Add New Product</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table data-table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product Title</th>
                                    <th scope="col">Purchase</th>
                                    <th scope="col">Selling</th>
{{--                                    <th scope="col">Min</th>--}}
{{--                                    <th scope="col">Wholesale</th>--}}
                                    <th scope="col">Stock</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($products as $product)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{ $product->name}}</td>
                                        <td>{{ $product->purchase_price}}</td>
                                        <td>{{ $product->selling_price}}</td>
{{--                                        <td>{{ $product->wholesalePrice}}</td>--}}
{{--                                        <td>{{ $product->min_price}}</td>--}}
                                        <td>{{ $product->in_stock}}</td>
                                        <td>
                                            @if(strpos($product->icon,'100x75'))
                                                <img class="rounded-circle shadow-lg" src="{{$product->getIconPath()}}" >
                                            @elseif(strpos($product->icon,'100x100'))
                                                <img class="rounded-circle shadow-lg" src="{{$product->getIconPath('esm')}}" >
                                            @else
                                                <img class="rounded-circle shadow-lg" src="{{$product->getIconPath('psm')}}" >
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('products.edit', ['product' => $product->id]) }}"
                                               class="btn btn-primary btn-xs mb-1 px-2" title="Edit Product"><i
                                                    class="fa fa-pencil"></i></a>
                                            <a href="{{ route('products.show', ['product' => $product->id]) }}"
                                               class="btn btn-success btn-xs mb-1 px-2" title="View Product Details"><i
                                                    class="fa fa-eye"></i></a>
                                            <button data-toggle="modal"
                                                    data-target="#confirm_product_{{$product->id}}"
                                                    class="btn btn-danger btn-xs mb-1 px-2" title="Delete Product">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            @include('includes.modals.confirm', ['model' => 'product', 'route' => route('products.destroy', ['product' => $product->id]), 'form' => true])
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
