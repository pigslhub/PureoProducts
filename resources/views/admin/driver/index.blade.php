@extends('admin.layouts.master')

@section('title', 'Driver')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
@endsection
@section('breadcrumb-title', 'Driver Management')

@section('breadcrumb-item')
    <li class="breadcrumb-item active">Driver</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="pull-left">All Drivers List</h5>
                        <div class=" pull-right">
                        <a href="{{route('adminDrivers.create')}}" class="btn btn-primary btn-sm px-2" title=""><i
                                    class="fa fa-plus"></i> Add New Driver</a>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>All Drivers Data </h5>
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
                                            <th>Gender</th>
                                            <th>Address</th>
                                            <th>Phone_No</th>
                                            <th>Area_Code</th>
                                            <th>Date_Of_Birth</th>
                                            <th>Status</th>
                                            <th>Avatar</th>
                                            <th>Rating</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($drivers as $driver)
                                              <tr>
                                                <th scope="row">{{$loop->iteration}}</th>
                                                  <td>
                                                    <a href="{{ route('adminDrivers.edit', ['adminDriver' => $driver->id]) }}"
                                                       class="btn btn-primary btn-sm mb-1 px-2" title="Edit Driver"><i
                                                            class="fa fa-pencil"></i></a>


                                                            <button data-toggle="modal"
                                                            data-target="#confirm_driver_{{$driver->id}}"
                                                            class="btn btn-danger btn-sm mb-1 px-2" title="Delete Shop">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    @include('includes.modals.confirm', ['model' => 'driver', 'route' => route('adminDrivers.destroy', ['adminDriver' => $driver->id]), 'form' => true])
                                               </td>
                                               <td>
                                                @if($driver->status==1)
                                                <a href="{{ route('adminDriver.changeStatus', ['adminDriver' => $driver->id]) }}"
                                                    class="btn btn-success btn-sm mb-1 px-2" title="Change Status">Active</a>
                                                @else
                                                    <a href="{{ route('adminDriver.changeStatus', ['adminDriver' => $driver->id]) }}"
                                                        class="btn btn-danger btn-sm mb-1 px-2" title="Change Status">Deactive</a>
                                                
                                                @endif
                                               </td>
                                                  <td>{{$driver->name}}</td>
                                                  <td>{{$driver->email}}</td>
                                                  <td>{{$driver->gender}}</td>
                                                  <td>{{$driver->address}}</td>
                                                  <td>{{$driver->phone}}</td>
                                                  <td>{{$driver->area_code}}</td>
                                                  <td>{{$driver->dob}}</td>
                                                  <td>{{$driver->status}}</td>
                                                  <td>{{$driver->avatar}}</td>
                                                  <td>{{$driver->rating}}</td>

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
