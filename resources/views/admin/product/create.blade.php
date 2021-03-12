@extends('admin.layouts.master')

@if(Route::currentRouteName() == 'adminProducts.edit')
    @section('title', 'Edit Product')
@else
    @section('title', 'Add New Product')
@endif

@section('breadcrumb-title', 'Product')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Create</li>
    <li class="breadcrumb-item active">Product</li>
@endsection

@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/tagsinput.css')}}">
<style>
    .bootstrap-tagsinput {
        width: 100% !important;
        }
    .bootstrap-tagsinput .tag {
        padding: 6px;
        margin-top:5px;
        }
</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    @if(Route::currentRouteName() == 'adminProducts.edit')
                    <form action="{{ route('adminProducts.update', ['adminProduct' => $adminProduct->id]) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                    @else
                        <form action="{{ route('adminProducts.store') }}" method="post" enctype="multipart/form-data">

                    @endif
                    @csrf
                        <div class="form-row">
                        <input type="hidden" value="{{ isset($adminProduct) ? $adminProduct->subcategory_id : $sub_category_id}}" name="subcategory_id">
                            <div class="col-md-6">
                                <label for="product_name" class="col-form-label">{{ __('Product Name') }}</label>
                                <input type="text" name="name" id="name" class="form-control"
                                value="{{ isset($adminProduct) ? $adminProduct->name : ''}}">
                            </div>
                            <div class="col-md-6">
                                <label for="product_name" class="col-form-label">{{ __('Price') }}</label>
                                <input type="text" name="price" id="product_name" class="form-control"
                                value="{{ isset($adminProduct) ? $adminProduct->price : ''}}">
                            </div>
                            <div class="col-md-6">
                                <label for="product_name" class="col-form-label">{{ __('Description') }}</label>
                                <input type="text" name="description" id="product_name" class="form-control"
                                value="{{ isset($adminProduct) ? $adminProduct->description : ''}}">
                            </div>
                            <div class="col-md-6">
                                <label for="product_name" class="col-form-label">{{ __('Volumes') }}</label><br>
                                <input type="text" name="volumes" data-role="tagsinput" id="product_name"
                                value="{{ isset($adminProduct) ? $adminProduct->volumes : ''}}">
                            </div>
                            <div class="col-md-6">
                                <label for="product_name" class="col-form-label">{{ __('Instructions') }}</label><br>
                                <input type="text" name="instruction" data-role="tagsinput" id="product_name"
                                value="{{ isset($adminProduct) ? $adminProduct->instruction : ''}}">
                            </div>
                            <div class="col-md-6">
                                <label for="product_name" class="col-form-label">{{ __('Ingredients') }}</label><br>
                                <input type="text" name="ingredients" data-role="tagsinput" id="product_name"
                                value="{{ isset($adminProduct) ? $adminProduct->ingredients : ''}}">
                            </div>
                            <div class="col-md-6">
                                <label for="product_name" class="col-form-label">{{ __('Available in stock') }}</label>
                                <input type="text" name="in_stock" id="product_name" class="form-control"
                                value="{{ isset($adminProduct) ? $adminProduct->in_stock : ''}}">
                            </div>
                            <div class="col-md-6">
                                <label for="icon" class="col-form-label">{{ __('Icon') }}</label>
                                <input type="file" name="icon" id="icon" class="form-control"><br>

                            </div>
                        </div>
                        @if(Route::currentRouteName() == 'adminProducts.edit')
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                        @else
                        <button type="submit" class="btn btn-primary btn-sm">Create</button>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@if(Route::currentRouteName() == 'adminProducts.edit')
@else
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-md-12">
                                <table class="table data-table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Sub Category</th>
                                        <th scope="col">In Stock</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($adminProducts as $adminProduct)
                                        <tr>
                                            <th scope="row">{{$loop->iteration}}</th>
                                            <td>{{ $adminProduct->name}}</td>
                                            <td>{{ $adminProduct->subcategory == null ? "---" : $adminProduct->subcategory->category->name}}</td>
                                            <td>{{ $adminProduct->subcategory == null ? "---" : $adminProduct->subcategory->name}}</td>
                                            <td>{{ $adminProduct->in_stock}}</td>
                                            <td>{{ $adminProduct->price}}</td>
                                            <td>

                                                @if(strpos($adminProduct->icon,'100x75'))
                                                    <img class="rounded-circle" src="{{$adminProduct->getIconPath()}}" >
                                                @else
                                                    <img class="rounded-circle" src="{{$adminProduct->getIconPath('psm')}}" >
                                                @endif
                                            </td>
                                            <td>
                                                <button data-toggle="modal"
                                                        data-target="#confirm_adminProduct_{{$adminProduct->id}}"
                                                        class="btn btn-danger btn-sm mb-1 px-2" title="Delete Product">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                @include('includes.modals.confirm', ['model' => 'adminProduct', 'route' => route('adminProducts.destroy', ['adminProduct' => $adminProduct->id]), 'form' => true])

                                                <a href="{{ route('adminProducts.edit', ['adminProduct' => $adminProduct->id]) }}"
                                                   class="btn btn-primary btn-sm mb-1 px-2" title="Edit Product"><i
                                                        class="fa fa-pencil"></i></a>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif


@endsection

@section('scripts')
<script src="{{asset('assets/js/tagsinput.js')}}"></script>
@endsection
