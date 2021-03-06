@extends('shop.layouts.master')

@section('title', 'Shop Categories')

@section('breadcrumb-title', 'Shop Categories')

@section('breadcrumb-item')
    <li class="breadcrumb-item active">Categories</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="pull-left">Shop Categories List</h5>
                        <div class=" pull-right">
                            {{-- <a href="{{ route('adminProduct.create') }}" class="btn btn-primary btn-sm px-2" title=""><i
                                    class="fa fa-plus"></i> Add New Product</a> --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="row">
                            @forelse ($categories as $category)
                                    <div class="col-md-4">
                                        <div class="card user-card">
                                        <div class="card-body">
                                            <div class="online-user">

                                            </div>
                                            <div class="user-card-image"><img class="img rounded-circle image-radius" src="{{asset('storage/'.$category->icon)}}" width="100" height="100" ></div>
                                            <div class="user-deatils text-center">
                                            <h5>{{$category->category_name}}</h5>
                                            {{-- <h6 class="mb-0">marshikisteen@gmail.com</h6> --}}
                                            <a href="{{route("shopProducts.create" , $category->id)}}" class="btn btn-sm btn-primary" type="button">View Products</a>
                                            {{-- <a href="{{route('manageMyShop.store',['shop' => $shop->id])}}"
                                                class="btn btn-sm btn-primary" title="Apply for Shop-Type"><i
                                                    class="fa fa-plus"></i></a> --}}
                                            </div>

                                        </div>
                                        </div>
                                    </div>
                                @empty

                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
