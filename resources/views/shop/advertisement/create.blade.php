@extends('shop.layouts.master')

@section('title', 'Advertisement')

@section('breadcrumb-title', 'Tutorial')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Create</li>
    <li class="breadcrumb-item active">Advertisement</li>
@endsection

@section('styles')
@endsection

@extends('layouts.form')

@section('form-heading', 'Add New Advertisement')

@section('route', route('advertisements.store'))

@section('form-fields')
    @include('shop.advertisement.fields')
@endsection

@section('submit-text', 'Create')

@section('scripts')
@endsection
