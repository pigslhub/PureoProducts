@extends('admin.layouts.master')

@section('title', 'ShopType')

@section('breadcrumb-title', 'Category')

@section('breadcrumb-item')
    <li class="breadcrumb-item active">Category</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="pull-left">Categories List</h5>
                        <div class=" pull-right">
                            <a href="{{ route('adminCategories.create') }}" class="btn btn-primary btn-sm px-2" title=""><i
                                    class="fa fa-plus"></i> Add New Category</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
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
                                @forelse($categories as $category)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{ $category->name}}</td>
                                        <td>
                                            <img src="{{asset('storage/'.$category->icon)}}" style="height:80px;width:80px;border-radius:50%">
                                        </td>
                                        <td>
                                            <button data-toggle="modal"
                                                    data-target="#confirm_shop_type_{{$category->id}}"
                                                    class="btn btn-danger btn-sm mb-1 px-2" title="Delete Shop Type">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            @include('includes.modals.confirm', ['model' => 'category', 'route' => route('adminCategories.destroy', ['adminCategory' => $category->id]), 'form' => true])

                                            <a href="{{ route('adminCategories.edit', ['adminCategory' => $category->id]) }}"
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
@endsection
