<?php

namespace App\Http\Controllers\Admin\NewProduct;

use App\Http\Controllers\Controller;
use App\Models\General\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('admin.newproduct.index', compact('products'));
    }

    public function create()
    {
        return view('admin.newproduct.create');
    }

    public function store(Request $request)
    {
        $product = Product::create($request->except('icon'));
        $product->updateIcon();
        return redirect(route('products.index'))->with("success", "Product Added Successfully");
    }

    public function show(Product $product)
    {
        return view('admin.newproduct.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('admin.newproduct.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->except('icon'));
        $product->updateIcon();

        return redirect()->route('products.index')->with('success', 'Product Updated Successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back()->with('success', 'Product Deleted Successfully');
    }
}
