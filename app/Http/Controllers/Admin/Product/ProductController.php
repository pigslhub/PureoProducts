<?php

namespace App\Http\Controllers\Admin\Product;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index');
    }


    public function create(Request $request)
    {

        $sub_category_id = $request->id;
        $products = Product::where('subcategory_id',$request->id)->get();
        return view('admin.product.create',compact('products', 'sub_category_id'));
    }

    public function store(Request $request)
    {
       $product = Product::create($request->except('icon'));
       if ($request->hasFile('icon')) {
           $filePath = $request->file('icon')->store('products/icons', 'public');
           $product->update([
               "icon" => $filePath
           ]);
       }

       return redirect()->back()->with("success", "Product added successfully");
    }

    public function show(Request $request)
    {

        $category_id = $request->id;
        $categories = SubCategory::where('category_id',$request->id)->get();

        return view('admin.product.showCategory',compact('categories', 'category_id'));
    }

    public function edit(Request $request ,Product $adminProduct )
    {
       return view('admin.product.create', compact('adminProduct'));
    }

    public function update(Request $request, Product $adminProduct )
    {
       $adminProduct->update($request->except('icon'));
       if($request->hasfile('icon')) {
           $filePath = $request->file('icon')->store('products/icons','public');
           $adminProduct->update([
               'icon' => $filePath,
           ]);
       };

       return redirect()->route('adminProducts.create', ['id' => $request->category_id])->with('success', 'Product Updated Successfully');

    }

    public function destroy(Product $adminProduct)
    {
       $adminProduct->delete();
       return redirect()->back()->with('success', 'Product Deleted Successfully');
    }

}
