@extends('admin.layouts.master')

@section('title', 'Edit Driver')

@section('breadcrumb-title', 'Driver')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Edit</li>
    <li class="breadcrumb-item active">Driver</li>
@endsection

@section('styles')
@endsection

@extends('layouts.form')

@section('form-heading', 'Edit Driver')
@section('route', route('adminDrivers.update', $adminDriver->id))

@section('form-fields')
    @include('admin.driver.fields')
    @method('PUT')
@endsection

@section('submit-text', 'Update')

@section('scripts')
@endsection

