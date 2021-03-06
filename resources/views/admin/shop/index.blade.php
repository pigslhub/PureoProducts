@extends('admin.layouts.master')

@section('title', 'Shops')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
@endsection
@section('breadcrumb-title', 'Shop Management')

@section('breadcrumb-item')
    <li class="breadcrumb-item active">Shops</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="pull-left">All Shops List</h5>
                        <div class=" pull-right">
                            <a href="{{route('adminShops.create')}}" class="btn btn-primary btn-sm px-2" title=""><i
                                    class="fa fa-plus"></i> Add New Shop</a>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>All Shops Data </h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="hover" id="example-style-4">
                                        <thead>
                                        <tr>
                                            <td>#</td>
                                            <th>Action</th>
                                            <th>Status</th>
                                            <th>Name</th>
                                            <th>Owner Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Phone_No</th>
                                            <th>Description</th>
                                            <th>Zip_Code</th>
                                            <th>Commission</th>
                                            <th>Shop_Type</th>
                                            <th>Avatar</th>
                                            <th>Rating</th>
                                            <th>Public_Key</th>
                                            <th>Secret_Key</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(_getAllShops() as $allShop)
                                            <tr>
                                                <th scope="row">{{$loop->iteration}}</th>
                                                <td>
                                                    <a href="{{ route('adminShops.edit', ['adminShop' => $allShop->id]) }}"
                                                       class="btn btn-primary btn-sm mb-1 px-2" title="Edit Shop"><i
                                                            class="fa fa-pencil"></i></a>


                                                    <button data-toggle="modal"
                                                            data-target="#confirm_allShop_{{$allShop->id}}"
                                                            class="btn btn-danger btn-sm mb-1 px-2" title="Delete Shop">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    @include('includes.modals.confirm', ['model' => 'allShop', 'route' => route('adminShops.destroy', ['adminShop' => $allShop->id]), 'form' => true])
                                                </td>
                                                <td>
                                                    @if($allShop->status==1)
                                                        <a href="{{ route('adminShops.changeStatus', ['adminShop' => $allShop->id]) }}"
                                                           class="btn btn-success btn-sm mb-1 px-2"
                                                           title="Change Status">Active</a>
                                                    @else
                                                        <a href="{{ route('adminShops.changeStatus', ['adminShop' => $allShop->id]) }}"
                                                           class="btn btn-danger btn-sm mb-1 px-2"
                                                           title="Change Status">Deactive</a>
                                                    @endif
                                                </td>
                                                <td>{{$allShop->name}}</td>
                                                <td>{{$allShop->owner_name}}</td>
                                                <td>{{$allShop->email}}</td>
                                                <td>{{$allShop->address}}</td>
                                                <td>{{$allShop->phone}}</td>
                                                <td>{{$allShop->description}}</td>
                                                <td>{{$allShop->zip_code}}</td>
                                                <td>{{$allShop->commission}}</td>
                                                @if($allShop->shop_type != null)
                                                    <td>{{$allShop->shop_type->type}}</td>
                                                @else
                                                    <td>---</td>
                                                @endif
                                                <td><img class="img rounded-circle img-50"
                                                         src="{{_getShopAvatar($allShop->id)}}" alt=""></td>
                                                <td>{{$allShop->rating}}</td>
                                                <td>{{$allShop->public_key}}</td>
                                                <td>{{$allShop->secret_key}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>

@endsection
