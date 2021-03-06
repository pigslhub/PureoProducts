@extends('shop.layouts.master')

@section('title', 'Edit Advertisement')

@section('breadcrumb-title', 'Advertisement')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Edit</li>
    <li class="breadcrumb-item active">Advertisement</li>
@endsection

@section('styles')
@endsection

@extends('layouts.form')

@section('form-heading', 'Edit Advertisement')
@section('route', route('advertisements.update', $advertisement->id))

@section('form-fields')
    @include('shop.advertisement.fields')
    @method('PUT')
@endsection

@section('submit-text', 'Update')

@section('scripts')
@endsection

