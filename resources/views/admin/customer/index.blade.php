@extends('admin.layouts.master')

@section('title', 'Customer')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
@endsection
@section('breadcrumb-title', 'Customer Management')

@section('breadcrumb-item')
    <li class="breadcrumb-item active">Customer</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="pull-left">All Customers List</h5>

                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="hover" id="example-style-4">
                                        <thead>
                                        <tr>
                                            <td>#</td>
                                            <th>Status</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Zip Code</th>
                                            <th>Address</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($customers as $customer)
                                              <tr>
                                                <th scope="row">{{$loop->iteration}}</th>
                                               <td>
                                                @if($customer->status==1)
                                                <a href="{{ route('adminCustomer.changeStatus', ['adminCustomer' => $customer->id]) }}"
                                                    class="btn btn-success btn-sm mb-1 px-2" title="Change Status">Active</a>
                                                @else
                                                    <a href="{{ route('adminCustomer.changeStatus', ['adminCustomer' => $customer->id]) }}"
                                                        class="btn btn-danger btn-sm mb-1 px-2" title="Change Status">Deactive</a>

                                                @endif
                                               </td>
                                                  <td>{{$customer->name}}</td>
                                                  <td>{{$customer->email}}</td>
                                                  <td>{{$customer->phone}}</td>
                                                  <td>{{$customer->zip_code}}</td>
                                                  <td>{{$customer->address}}</td>

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
