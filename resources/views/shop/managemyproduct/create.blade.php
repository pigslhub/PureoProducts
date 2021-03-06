@extends('shop.layouts.master')

@section('title', 'Loaded Product')

@section('breadcrumb-title', 'Product')

@section('breadcrumb-item')
    <li class="breadcrumb-item"> Loaded Product</li>
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
                    <h5 class="pull-left">All Loaded Product List</h5>
                </div>


                {{-- <input type="hidden" name="shop_id" value="{{auth('shop')->user()->id}}"> --}}
                    <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-12">
                            <table class="table data-table">

                            <form action="{{route('manageMyProducts.store',)}}" method="post">
                                @csrf
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Product Image</th>
                                    <th scope="col">Update Price</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($loadedProducts as $product)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{ $product->product->product_name}}</td>
                                        <td>
                                            <img src="{{asset('storage/'.$product->product->icon)}}" style="height:80px;width:80px;border-radius:50%">
                                        </td>

                                        <td>
                                            {{-- {!! _isProductLoaded(auth('shop')->user()->id, $category_id, $product->id) !!} --}}
                                          {{-- @php
                                            $isExist = App\Models\Shop_Product::where(['shop_id'=>auth('shop')->user()->id,'category_id'=>$category_id,'product_id'=>$product->id])->first();
                                             if(!$isExist)
                                             {
                                                echo "<input style='height: 30px;width:30px;' type='checkbox' value='{{$product->id}}' class='checkbox checkbox-solid-primary' name='product_select[]' >";
                                             }else {
                                                 echo "<span class='badge badge-primary'>Already Added</span>";
                                             }
                                          @endphp  --}}
                                            <input type="hidden" name="prices[{{$product->id}}][product_id]" value="{{$product->id}}">

                                            <input type="text" class="form-control" style="width: 100px" name="prices[{{$product->id}}][price]" id="price" value="{{$product->price}}">

                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">Update Price</button>
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
                                        <td></td>
                                        <td class="mx-auto d-block">
                                            <button type="submit" class="btn btn-success"> Updated All Price </button>
                                        </td>
                                    </tr>
                                </tfoot>
                            </form>

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
