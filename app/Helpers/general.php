<?php

use App\Models\Admin;
use App\Models\Driver;
use App\Models\Customer;
use App\Models\General\Order;
use App\Models\ShopType;
use App\Models\Category;
use App\Models\General\Cart;
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

function _getAllSubCategories()
{
    $subcategories = \App\Models\SubCategory::inRandomOrder()->limit(6)->get();
    return $subcategories;
}

function _getallCategoryTypes()
{
    $shopTypes = ShopType::all();
    return $shopTypes;
}

function _getAllCategories()
{
    $categories = Category::get();
    return $categories;
}

function _getRandomProducts()
{
    $products = \App\Models\Product::inRandomOrder()->limit(12)->get();
    return $products;
}

function _getCartsCount()
{
    $carts = \App\Models\General\Cart::get()->count();
    return $carts;
}

function _getAllProducts()
{
    $products = \App\Models\Product::get();
    return $products;
}

function _getCustomerCart()
{
    $carts = Cart::where(['customer_id'=> auth('customer')->user()->id, 'purchased' => '0' ])->get();
    return $carts;
}

function _getCustomerCartTotalAmount()
{
    $carts = Cart::where(['customer_id' => auth('customer')->user()->id, 'purchased' => '0'])->get();
    $total = 0;
    if($carts)
    {
        foreach($carts as $cart)
        {
            $total += $cart->total;
        }
    }
    return $total;
}






