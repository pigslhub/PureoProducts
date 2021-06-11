@extends('admin.layouts.master')

@section('title', 'Edit Product')

@section('breadcrumb-title', 'Product')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Edit</li>
    <li class="breadcrumb-item active">Product</li>
@endsection

@section('styles')
@endsection

@extends('layouts.form')

@section('form-heading', 'Edit Product')
@section('route', route('products.update', ['product' => $product->id]))

@section('form-fields')
    @include('admin.newproduct.fields')
    @method('PUT')
@endsection

@section('submit-text', 'Update')

@section('scripts')
@endsection

