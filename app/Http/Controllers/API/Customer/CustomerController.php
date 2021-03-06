<?php

namespace App\Http\Controllers\API\Customer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Customer;
use App\Models\General\Cart;
use App\Models\General\Order;
use App\Models\Product;
use App\Models\ShopProduct;
use App\Models\ShopType;
use App\Shop;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function getAllShopTypes(){

       $shopTypes = ShopType::all();
       return response()->json(['shop_types' => $shopTypes]);
    }

    public function getShopsOnZipCode(Request $request){
       
        $customerZipCodes = _getAllCustomerZipCodes($request->customer_id);
        $shops = Shop::where('shop_type_id', $request->shop_type_id)->whereIn('zip_code' , $customerZipCodes)->get();
        return response()->json(['shops' => $shops]);
    }

    public function getCategoriesOnShopType(Request $request){

       $categories = Category::where('shop_type_id', $request->shop_type_id)->get();
       return response()->json(['categories' => $categories]);
    }

    public function getProductsOnCategory(Request $request){

       $products = ShopProduct::where('category_id', $request->category_id)->where('shop_id',$request->shop_id)->get();
       $products->load('product');
       return response()->json(['products' => $products]);
    }

    public function addToCart(Request $request){
       $alreadyExistedCartItem =Cart::where('product_id', $request->product_id)->first();
       if($alreadyExistedCartItem){
          $res = $alreadyExistedCartItem->update([
              "qty" => $alreadyExistedCartItem->qty+=1,
              "total" => $alreadyExistedCartItem->total+$alreadyExistedCartItem->price

          ]);
          if($res)
          {
             return response()->json(['update' => "yes"]);
          }
          else
         {
            return response()->json(['update' => "no"]);
         }
       }
       else{
          $cart = Cart::create($request->all());
          if($cart)
          {

             return response()->json(['added' => "yes"]);
            }else
         {
               return response()->json(['added' => "no"]);
          }
       }

      //  dd($cart->toArray());
      //  Order::where('customer_id' = $request->customer_id )->where('purchased', 0)->get();

    }

    public function updateFcmToken(Request $request)
    {
        $customer = Customer::where('id', $request->customer_id)->first();
        $res = $customer->update([
           "fcm_token" => $request->fcm_token
        ]);
        if($res)
        {
            return response()->json(['added' => "yes"]);
        }
        else{
            return response()->json(['added' => "no"]);
        }

    }
}
