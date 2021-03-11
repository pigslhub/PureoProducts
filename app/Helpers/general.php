<?php

use App\Models\Admin;
use App\Models\Driver;
use App\Models\Customer;
use App\Models\General\Order;
use App\Models\ShopType;
use App\Models\Category;
use App\Shop;

function _getShopAvatar($id)
{
    $shop = Shop::where('id', $id)->first();
    if ($shop->icon != null) {
        return asset('storage/' . $shop->icon);
    } else
        return asset('assets/images/user/user.png');
}

function _getAdminAvatar($id)
{
    $shop = Admin::where('id', $id)->first();
    if ($shop->avatar != null) {
        return asset('storage/' . $shop->avatar);
    } else
        return asset('assets/images/user/user.png');
}


function _getAllShopCategories()
{
    $categories = Category::all();
    return $categories;
}

function _getallCategoryTypes()
{
    $shopTypes = ShopType::all();
    return $shopTypes;
}

function _getAllCategories()
{
    $categories = Category::inRandomOrder()->get();
    return $categories;
}

function _getRandomProducts()
{
    $products = \App\Models\Product::inRandomOrder()->get();
    return $products;
}

function _getAllShops()
{
    $allShop = Shop::all();
    return $allShop;
}

function _getAllDrivers()
{
    $drivers = Driver::all();
    return $drivers;
}
function _getAllOnGoingOrders()
{
    $onGoingOrders = Order::where(['status' => 'place', 'shop_id' => auth('shop')->user()->id])->get();
    // dd($onGoingOrder);
    return $onGoingOrders;
}

function _isProductLoaded($shopId, $categoryId, $productId)
{
    $isExist = App\Models\ShopProduct::where(['shop_id' => $shopId, 'category_id' => $categoryId, 'product_id' => $productId])->first();
    if (!$isExist) {
        return "<input style='height: 30px;width:30px;' type='checkbox' value=" . $productId . " class='checkbox checkbox-solid-primary' name='product_select[]' >";
    } else {
        return "<span class='badge badge-primary'>Already Added</span>";
    }
}
function _getAllOrderOfFoodShop()
{
    $shop_id = auth('shop')->user()->id;
    $orders = Order::where('shop_id', $shop_id)->whereIn('status',['place','ready','accept'])->get();
    return $orders;
}

function _getAllCategoriesForShopTypeId()
{
    $shop_type_id = auth('shop')->user()->shop_type_id;
    $categories = Category::where('shop_type_id', $shop_type_id)->get();
    return $categories;
}

function _getAllCustomerZipCodes($customer_id)
{
      $customer = Customer::where('id',$customer_id)->first();
      $zipcodes = array($customer->zip_code);
      if($customer->nearby_zip_code != null)
      {
          $zipCodes = explode(',',$customer->nearby_zip_code);
            foreach($zipCodes as $code)
          {
              array_push($zipcodes,$code);
          }
      }

      return $zipcodes;
}

function _getAllDriverZipCodes($driver_id)
{

      $driver = Driver::where('id',$driver_id)->first();

      $zipcodes = array($driver->zip_code);
      if($driver->nearby_zip_code != null)
      {
          $zipCodes = explode(',',$driver->nearby_zip_code);
        foreach($zipCodes as $code)
          {
              array_push($zipcodes,$code);
          }
      }

      return $zipcodes;
}
function _getShopAllZipCodes($shop_id)
{

      $shop = Shop::where('id',$shop_id)->first();

      $zipcodes = array($shop->zip_code);
      if($shop->nearby_zip_code != null)
      {
          $zipCodes = explode(',',$shop->nearby_zip_code);
        foreach($zipCodes as $code)
          {
              array_push($zipcodes,$code);
          }
      }

      return $zipcodes;
}
