@extends('shop.layouts.master')

@section('title', 'Advertisements')

@section('breadcrumb-title', 'Advertisements')

@section('breadcrumb-item')
    <li class="breadcrumb-item active">Advertisements</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="pull-left">Advertisement List</h5>
                        <div class=" pull-right">
                            <a href="{{ route('advertisements.create') }}" class="btn btn-primary btn-sm px-2" title=""><i
                                    class="fa fa-plus"></i> Add New Advertisement</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table data-table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Start Date</th>
                                    <th scope="col">End Date</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($advertisements as $advertisement)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>

                                        <td>{{ $advertisement->title}}</td>
                                        <td>{{ $advertisement->start_date}}</td>
                                        <td>{{ $advertisement->end_date}}</td>
                                        <td>
                                           
                                            <img src="{{asset('storage/'.$advertisement->image)}}" style="height:80px;width:80px;border-radius:50%">
                                        </td>
                                        <td>
                                            <button data-toggle="modal"
                                                    data-target="#confirm_advertisement_{{$advertisement->id}}"
                                                    class="btn btn-danger btn-sm mb-1 px-2" title="Delete Advertisement">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            @include('includes.modals.confirm', ['model' => 'advertisement', 'route' => route('advertisements.destroy', $advertisement->id), 'form' => true])
                                            <a href="{{ route('advertisements.edit', ['advertisement' => $advertisement->id]) }}"
                                               class="btn btn-primary btn-sm mb-1 px-2" title="Edit Advertisement"><i
                                                    class="fa fa-pencil"></i></a>
                                       
                                        <a href="{{ route('advertisements.show', ['advertisement' => $advertisement->id]) }}"
                                           class="btn btn-success btn-sm mb-1 px-2" title="View Advertisement Details"><i
                                                class="fa fa-eye"></i></a>
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
