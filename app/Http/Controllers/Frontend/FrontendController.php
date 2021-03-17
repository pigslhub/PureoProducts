<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\General\Cart;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Contracts\Auth\SupportsBasicAuth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function dashboard()
    {
        return view('frontend.index');
    }

    public function productsPage(SubCategory $subCategory)
    {
//        dd($subCategory->products->toArray());
        return view('frontend.products.products', compact('subCategory'));
    }

    public function subcategories(Category $category)
    {
        $subcategories = SubCategory::get();
        return view('frontend.subcategory.subcategory', compact('subcategories', 'category'));
    }

    public function productDetails(Request $request, Product $product)
    {
        return view('frontend.products.productDetails', compact('product'));
    }

    public function yourCart($id)
    {
        $carts = Cart::with('product')->where(['customer_id'=>$id,'purchased'=>'no'])->get();

        return view('frontend.cart.yourCart',compact('carts'));
    }

    public function checkout()
    {
        return view('frontend.cart.checkout');
    }
}
