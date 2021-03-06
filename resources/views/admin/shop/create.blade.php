@extends('admin.layouts.master')

@section('title', 'Add New Shop')

@section('breadcrumb-title', 'Add New Shop')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Shop</li>
    <li class="breadcrumb-item active">Add New Shop</li>
@endsection

@section('styles')
@endsection

@extends('layouts.form')

@section('form-heading', 'Add New Shop')

@section('route', route('adminShops.store'))

@section('form-fields')
    @include('admin.shop.fields')
@endsection

@section('submit-text', 'Create')

@section('scripts')
@endsection
