@extends('shop.layouts.master')

@section('title', 'Product')

@section('breadcrumb-title', 'Product')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Product</li>
    {{-- <li class="breadcrumb-item active">Product</li> --}}
@endsection

@section('styles')
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="pull-left">All Product List</h5>
                </div>
                <form action="{{route('shopProducts.store')}}" method="post">
                    @csrf

                <input type="hidden" name="shop_id" value="{{auth('shop')->user()->id}}">
                <input type="hidden" name="category_id" value="{{$category_id}}">
                    <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-12">
                            <table class="table data-table">


                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Product Image</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($products as $product)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{ $product->product_name}}</td>
                                        <td>
                                            <img src="{{asset('storage/'.$product->icon)}}" style="height:80px;width:80px;border-radius:50%">
                                        </td>
                                        <td>
{{--                                            {!! _isProductLoaded(auth('shop')->user()->id, $category_id, $product->id) !!}--}}
                                           @php
                                            $isExist = App\Models\ShopProduct::where(['shop_id'=>auth('shop')->user()->id,'category_id'=>$category_id,'product_id'=>$product->id])->first();
                                             if(!$isExist)
                                             {
                                                echo "<input style='height: 30px;width:30px;' type='checkbox' value='$product->id' class='checkbox checkbox-solid-primary' name='product_select[]' >";
                                             }else {
                                                 echo "<span class='badge badge-primary'>Already Added</span>";
                                             }
                                          @endphp

                                        </td>
                                    </tr>
                                 @empty
                                 <h2>This Categorie have no Product</h2>
                                @endforelse
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="mx-auto d-block">
                                            <button type="submit" class="btn btn-success"> Add Selected</button>
                                        </td>
                                    </tr>
                                </tfoot>

                            </table>

                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
@endsection
