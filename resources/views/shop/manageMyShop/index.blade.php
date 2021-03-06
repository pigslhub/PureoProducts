@extends('shop.layouts.master')
@section('title','ManageMyShop')
@section('breadcrumb-title', 'All Shop Types')
@section('breadcrumb-item')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Manage My Shop</li>
@endsection
@section('content')
@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                   <div class="row">
                    @foreach ($allShopTypes as $manageMyShop)
                    
                      <div class="col-xl-4 xl-50 col-md-3 set-col-6">
                        <div class="card user-card">
                          <div class="card-body">
                            <div class="online-user">
                              <h5 class="font-primary f-12 mb-0">Shop Type</h5>
                            </div>
                            <div class="user-card-image"><img style="width: 100px;height:100px" class="img-fluid rounded-circle image-radius" src="{{asset('storage/'.$manageMyShop->icon)}}" alt=""></div>
                            <div class="user-deatils text-center">
                            <h5>{{$manageMyShop->type}}</h5>
                              {{-- <h6 class="mb-0">marshikisteen@gmail.com</h6> --}}
                              <form action="{{route('manageMyShop.update', ['manageMyShop' => $manageMyShop->id])}}" method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-sm btn-primary">Apply</button>
                            </form>
                            {{-- <a href="{{route('manageMyShop.update',['manageMyShop' => $shop->id])}}" class="btn btn-sm btn-primary" type="button">Apply</a> --}}
                            {{-- <a href="{{route('manageMyShop.store',['shop' => $shop->id])}}"
                                class="btn btn-sm btn-primary" title="Apply for Shop-Type"><i
                                     class="fa fa-plus"></i></a> --}}
                            </div>
                
                          </div>
                        </div>
                      </div>
                    
                    @endforeach
                  </div>
                    
                
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
