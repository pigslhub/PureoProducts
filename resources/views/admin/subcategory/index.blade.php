@extends('admin.layouts.master')

@section('title', 'SubCategory')

@section('breadcrumb-title', 'SubCategory')

@section('breadcrumb-item')
    <li class="breadcrumb-item active">Sub Category</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="pull-left">Sub Categories List</h5>
                        <div class=" pull-right">
                            {{-- <a href="{{ route('adminCategory.create') }}" class="btn btn-primary btn-sm px-2" title=""><i
                                    class="fa fa-plus"></i> Add New SubCategory</a> --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="row">
                            @forelse(_getAllShopCategories() as $category)
                                    <div class="col-md-4">
                                        <div class="card user-card">
                                        <div class="card-body">
                                            <div class="online-user">

                                            </div>
                                            <div class="user-card-image">
                                                @if($category->icon == null || $category->icon=='')
                                                <img src="{{asset('assets/images/noImg.jpg')}}" style="height:80px;width:80px;border-radius:50%">
                                                @else
                                                <img src="{{asset('storage/'.$category->icon)}}" style="height:80px;width:80px;border-radius:50%">
                                                @endif
                                            </div>
                                            <div class="user-deatils text-center">
                                            <h5>{{$category->name}}</h5>
                                            <a href="{{route('subcategory.createField',$category->id)}}" class="btn btn-sm btn-primary" type="button">View</a>
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
