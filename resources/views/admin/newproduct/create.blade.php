@extends('admin.layouts.master')

@section('title', 'Add New Product')

@section('breadcrumb-title', 'Product')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Create</li>
    <li class="breadcrumb-item active">Product</li>
@endsection

@section('styles')
@endsection

@extends('layouts.form')

@section('form-heading', 'Add New Product')

@section('route', route('products.store'))

@section('form-fields')
    @include('admin.newproduct.fields')
@endsection

@section('submit-text', 'Create')

@section('scripts')
@endsection
