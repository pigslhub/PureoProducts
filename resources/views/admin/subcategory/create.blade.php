@extends('admin.layouts.master')

@section('title', 'Add New SubCategory')

@section('breadcrumb-title', 'SubCategory')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Create</li>
    <li class="breadcrumb-item active">Category</li>
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
                    @if(Route::currentRouteName() == 'adminCategories.edit')
                    <form action="{{ route('adminCategories.update', ['adminCategory' => $adminCategory->id]) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                    @else
                        <form action="{{ route('adminCategories.store') }}" method="post" enctype="multipart/form-data">

                    @endif
                    @csrf
                        <div class="form-row">
                        <input type="hidden" value="{{ isset($adminCategory) ? $adminCategory->shop_type_id : $category_id}}" name="shop_type_id">
                            <div class="col-md-6">
                                <label for="category_name" class="col-form-label">{{ __('Sub Category Name') }}</label>
                                <input type="text" name="category_name" id="category_name" class="form-control"
                                value="{{ isset($adminCategory) ? $adminCategory->category_name : ''}}">
                            </div>

                            <div class="col-md-6">
                                <label for="icon" class="col-form-label">{{ __('Icon') }}</label>
                                <input type="file" name="icon" id="icon" class="form-control"><br>
                                @if(isset($adminCategory))
                                    <img src="{{asset('storage/'.$adminCategory->icon)}}" style="height:80px;width:80px;border-radius:50%">
                                @endif
                            </div>
                        </div>
                        @if(Route::currentRouteName() == 'adminCategory.edit')
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
@if(Route::currentRouteName() == 'adminCategories.edit')
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
                                    <th scope="col">Enter Category</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($subcategories as $subcategory)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{ $subcategory->name}}</td>
                                        <td>
                                            <img src="{{asset('storage/'.$subcategory->icon)}}" style="height:80px;width:80px;border-radius:50%">
                                        </td>
                                        <td>
                                            <button data-toggle="modal"
                                                    data-target="#confirm_category_{{$subcategory->id}}"
                                                    class="btn btn-danger btn-sm mb-1 px-2" title="Delete Category">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            @include('includes.modals.confirm', ['model' => 'subcategory', 'route' => route('adminCategories.destroy', ['adminCategory' => $subcategory->id]), 'form' => true])

                                            <a href="{{ route('adminCategories.edit', ['adminCategory' => $subcategory->id]) }}"
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
