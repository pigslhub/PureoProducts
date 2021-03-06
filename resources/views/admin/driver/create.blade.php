@extends('admin.layouts.master')

@section('title', 'Add Driver Shop')

@section('breadcrumb-title', 'Add Driver Shop')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Driver</li>
    <li class="breadcrumb-item active">Add Driver Shop</li>
@endsection

@section('styles')
@endsection

@extends('layouts.form')

@section('form-heading', 'Add Driver Shop')

@section('route', route('adminDrivers.store'))

@section('form-fields')
    @include('admin.driver.fields')
@endsection

@section('submit-text', 'Create')

@section('scripts')
@endsection
