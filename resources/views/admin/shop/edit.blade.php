@extends('admin.layouts.master')

@section('title', 'Edit Shop Type')

@section('breadcrumb-title', 'Advertisement')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Edit</li>
    <li class="breadcrumb-item active">Advertisement</li>
@endsection

@section('styles')
@endsection

@extends('layouts.form')

@section('form-heading', 'Edit Advertisement')
@section('route', route('adminShops.update', $adminShop->id))

@section('form-fields')
    @include('admin.shop.fields')
    @method('PUT')
@endsection

@section('submit-text', 'Update')

@section('scripts')
@endsection

