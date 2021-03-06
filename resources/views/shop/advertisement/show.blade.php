@extends('shop.layouts.master')

@section('title', 'Advertisement')

@section('breadcrumb-title', 'Advertisement')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Advertisement</li>
    <li class="breadcrumb-item active">Details</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <a href="{{ route('advertisements.index') }}"><i class="fa fa-arrow-left"> Back to list</i></a>
                        <h5 class="text-center">Advertisement</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto d-block">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="mb-5 mt-2">Title: <h4>{{ $advertisement->title }}</h4></div>
                            <div class="mb-5 mt-2">Start Date: <h4>{{ $advertisement->start_date }}</h4></div>
                            <div class="mb-5 mt-2">End Date: <h4>{{ $advertisement->end_date }}</h4></div>
                            <img src="{{asset('storage/'.$advertisement->image)}}" width="150" height="150" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
