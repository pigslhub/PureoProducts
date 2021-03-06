@extends('admin.layouts.master')

@section('title', 'Add New Shop Type')

@section('breadcrumb-title', 'ShopType')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Create</li>
    <li class="breadcrumb-item active">ShopType</li>
@endsection

@section('styles')
@endsection

@extends('layouts.form')

@section('form-heading', 'Add New Shop Type')

@section('route', route('adminCategories.store'))

@section('form-fields')
    @include('admin.category.fields')
@endsection

@section('submit-text', 'Create')

@section('scripts')
@endsection
