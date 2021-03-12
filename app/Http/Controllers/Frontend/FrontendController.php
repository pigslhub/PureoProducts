<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function productsPage()
    {
        $products = Product::paginate(9);
        return view('frontend.products.products', compact('products'));
    }

    public function productDetails(Request $request, Product $product)
    {
        return view('frontend.products.productDetails', compact('product'));
    }

    public function yourCart(Request $request, Product $product)
    {
        return view('frontend.cart.yourCart', compact('product'));
    }
}
