@extends('admin.layouts.master')

@section('title', 'Admin')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
@endsection
@section('breadcrumb-title', 'Admin Management')

@section('breadcrumb-item')
    <li class="breadcrumb-item active">Admin</li>
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="pull-left">All Sub Admins List</h5>
                        <div class=" pull-right">
                            @if(auth()->user('admin')->type == 0)
                        <a href="{{route('adminAdmins.create')}}"class="btn btn-primary btn-sm px-2" title=""><i
                                    class="fa fa-plus"></i> Add New Admin</a>
                        </div>
                    </div>
                    
                    
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>All Sub Admins Data </h5>
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
                                            <th>Email</th>
                                            <th>Type</th>
                                            <th>Avatar</th>
                                            

                                        </tr>
                                        </thead>
                                        <tbody>
                                            
                                            

                                                @foreach($admins as $admin)
                                              <tr>
                                                <th scope="row">{{$loop->iteration}}</th>
                                                  <td>
                                                  <a href="{{route('adminAdmins.edit' , ['adminAdmin' => $admin->id])}}"
                                                       class="btn btn-primary btn-sm mb-1 px-2" title="Edit Driver"><i
                                                            class="fa fa-pencil"></i></a>


                                                    <button data-toggle="modal"
                                                            data-target="#confirm_admin_{{$admin->id}}"
                                                            class="btn btn-danger btn-sm mb-1 px-2" title="Delete Admin">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    @include('includes.modals.confirm', ['model' => 'admin', 'route' => route('adminAdmins.destroy', ['adminAdmin' => $admin->id]), 'form' => true])
                                               </td>
                                               <td>
                                                @if($admin->status==1)
                                                <a href="{{ route('adminAdmin.changeStatus', ['adminAdmin' => $admin->id]) }}"
                                                    class="btn btn-success btn-sm mb-1 px-2" title="Change Status">Active</a>
                                                @else
                                                    <a href="{{ route('adminAdmin.changeStatus', ['adminAdmin' => $admin->id]) }}"
                                                        class="btn btn-danger btn-sm mb-1 px-2" title="Change Status">Deactive</a>
                                                
                                                @endif
                                               </td>
                                                  <td>{{$admin->name}}</td>
                                                  <td>{{$admin->email}}</td>
                                                  <td>{{$admin->type}}</td>
                                                  <td>{{$admin->avatar}}</td>
                                                  
                                              </tr>

                                                @endforeach
                                               
                                            

                                            @else
                                             
                                               <h1>Only Super Admin Access This Table</h1>

                                            @endif







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
