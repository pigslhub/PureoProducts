@extends('admin.layouts.master')

@section('title', 'Add New Admin')

@section('breadcrumb-title', 'Add new Admin')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Admin</li>
    <li class="breadcrumb-item active">Add New Admin</li>
@endsection

@section('styles')
@endsection

@extends('layouts.form')

@section('form-heading', 'Add Driver Shop')

@section('route', route('adminAdmins.store'))

@section('form-fields')
    @include('admin.admin.fields')
@endsection

@section('submit-text', 'Create')

@section('scripts')
@endsection
