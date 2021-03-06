@extends('admin.layouts.master')

@section('title', 'Add New Product')

@section('breadcrumb-title', 'Product')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Create</li>
    <li class="breadcrumb-item active">Product</li>
@endsection

@section('styles')
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
                        <input type="hidden" value="{{ isset($adminProduct) ? $adminProduct->category_id : $sub_category_id}}" name="sub_category_id">
                            <div class="col-md-6">
                                <label for="product_name" class="col-form-label">{{ __('Product Name') }}</label>
                                <input type="text" name="product_name" id="product_name" class="form-control"
                                value="{{ isset($adminProduct) ? $adminProduct->product_name : ''}}">
                            </div>

                            <div class="col-md-6">
                                <label for="icon" class="col-form-label">{{ __('Icon') }}</label>
                                <input type="file" name="icon" id="icon" class="form-control"><br>
                                @if(isset($adminProduct))
                                    <img src="{{asset('storage/'.$adminProduct->icon)}}" style="height:80px;width:80px;border-radius:50%">
                                @endif
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
                                    <th scope="col">Enter Product</th>
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
                                            <img src="{{asset('storage/'.$product->icon)}}" style="height:80px;width:80px;border-radius:50%">
                                        </td>
                                        <td>
                                            <button data-toggle="modal"
                                                    data-target="#confirm_product_{{$product->id}}"
                                                    class="btn btn-danger btn-sm mb-1 px-2" title="Delete Product">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            @include('includes.modals.confirm', ['model' => 'product', 'route' => route('adminProducts.destroy', ['adminProduct' => $product->id]), 'form' => true])

                                            <a href="{{ route('adminProducts.edit', ['adminProduct' => $product->id]) }}"
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
</div>
@endif


@endsection

@section('scripts')
@endsection
