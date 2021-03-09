@extends('admin.layouts.master')

@section('title', 'Edit Category')

@section('breadcrumb-title', 'Category')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Edit</li>
    <li class="breadcrumb-item active">Category</li>
@endsection

@section('styles')
@endsection

@extends('layouts.form')

@section('form-heading', 'Edit Category')
@section('route', route('adminCategories.update', ['adminCategory' => $adminCategory->id]))

@section('form-fields')
    @include('admin.category.fields')
    @method('PUT')
@endsection

@section('submit-text', 'Update')

@section('scripts')
@endsection

