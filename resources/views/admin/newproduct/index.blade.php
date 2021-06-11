@extends('admin.layouts.master')

@section('title', 'Product')

@section('breadcrumb-title', 'Product')

@section('breadcrumb-item')
    <li class="breadcrumb-item active">Product</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
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
                                    <th scope="col">Image</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($products as $product)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{ $product->name}}</td>
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
                                            <button data-toggle="modal"
                                                    data-target="#confirm_product_{{$product->id}}"
                                                    class="btn btn-danger btn-sm mb-1 px-2" title="Delete Product">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            @include('includes.modals.confirm', ['model' => 'product', 'route' => route('products.destroy', ['product' => $product->id]), 'form' => true])
                                            <a href="{{ route('products.edit', ['product' => $product->id]) }}"
                                               class="btn btn-primary btn-sm mb-1 px-2" title="Edit Product"><i
                                                    class="fa fa-pencil"></i></a>
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
