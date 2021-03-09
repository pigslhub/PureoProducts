@extends('admin.layouts.master')

@if(Route::currentRouteName() == 'adminSubCategories.edit')
@section('title', 'Edit SubCategory')
@else
@section('title', 'Add New SubCategory')
@endif

@section('breadcrumb-title', 'SubCategory')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Create</li>
    <li class="breadcrumb-item active">Sub Category</li>
@endsection

@section('styles')
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    @if(Route::currentRouteName() == 'adminSubCategories.edit')
                    <form action="{{ route('adminSubCategories.update', ['adminSubCategory' => $adminSubCategory->id]) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                    @else
                        <form action="{{ route('adminSubCategories.store') }}" method="post" enctype="multipart/form-data">

                    @endif
                    @csrf
                        <div class="form-row">
                        <input type="hidden" value="{{ isset($adminSubCategory) ? $adminSubCategory->category_id : $category_id}}" name="category_id">
                            <div class="col-md-6">
                                <label for="category_name" class="col-form-label">{{ __('Sub Category Name') }}</label>
                                <input type="text" name="name" id="category_name" class="form-control"
                                value="{{ isset($adminSubCategory) ? $adminSubCategory->name : ''}}">
                            </div>

                            <div class="col-md-6">
                                <label for="icon" class="col-form-label">{{ __('Icon') }}</label>
                                <input type="file" name="icon" id="icon" class="form-control"><br>
                                @if(isset($adminSubCategory))
                                    @if($adminSubCategory->icon == null || $adminSubCategory->icon == '')
                                    <img src="{{asset('assets/images/noImg.jpg')}}" style="height:80px;width:80px;border-radius:50%">
                                    @else
                                    <img src="{{asset('storage/'.$adminSubCategory->icon)}}" style="height:80px;width:80px;border-radius:50%">
                                    @endif


                                @endif
                            </div>
                        </div>
                        @if(Route::currentRouteName() == 'adminSubCategories.edit')
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                        @else
                        <button type="submit" class="btn btn-primary btn-sm">Create</button>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@if(Route::currentRouteName() == 'adminSubCategories.edit')
@else
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-12">
                            <table class="table data-table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Sub Category</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($subcategories as $subcategory)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{ $subcategory->name}}</td>
                                        <td>{{ $subcategory->category->name}}</td>
                                        <td>
                                            @if($subcategory->icon == null || $subcategory->icon == '')
                                                <img src="{{asset('assets/images/noImg.jpg')}}" style="height:80px;width:80px;border-radius:50%">
                                                @else
                                                <img src="{{asset('storage/'.$subcategory->icon)}}" style="height:80px;width:80px;border-radius:50%">
                                                @endif

                                        </td>
                                        <td>
                                            <button data-toggle="modal"
                                                    data-target="#confirm_subcategory_{{$subcategory->id}}"
                                                    class="btn btn-danger btn-sm mb-1 px-2" title="Delete Sub Category">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            @include('includes.modals.confirm', ['model' => 'subcategory', 'route' => route('adminSubCategories.destroy', ['adminSubCategory' => $subcategory->id]), 'form' => true])

                                            <a href="{{ route('adminSubCategories.edit', ['adminSubCategory' => $subcategory->id]) }}"
                                               class="btn btn-primary btn-sm mb-1 px-2" title="Edit Category"><i
                                                    class="fa fa-pencil"></i></a>


                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif


@endsection

@section('scripts')
@endsection
