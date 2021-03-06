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

    // public function create(Request $request)
    // {
    //     $products = Product::where('shop_type_id',$request->shop_type_id)->get();
    //     return view('admin.product.create',compact('products'));
    // }
    public function create(Request $request)
    {
//        // dd($request->id);
////        dd($request->toArray());
        $sub_category_id = $request->id;
        $products = Product::where('sub_category_id',$request->id)->get();
////        dd($products->toArray());
        return view('admin.product.create',compact('products', 'sub_category_id'));
    }

    public function store(Request $request)
    {
//        $product = Product::create($request->except('icon'));
//        if ($request->hasFile('icon')) {
//            $filePath = $request->file('icon')->store('products/icons', 'public');
//            $product->update([
//                "icon" => $filePath
//            ]);
//        }
//
//        return redirect()->back()->with("success", "Product created successfully");
    }

    public function show(Request $request)
    {
//        // return view('adminProducts.show', compact('product'));
////        return view('admin.product.showCategory');
        $category_id = $request->id;
        $categories = SubCategory::where('category_id',$request->id)->get();
////        dd($categories->toArray());
        return view('admin.product.showCategory',compact('categories', 'category_id'));
    }

    public function edit(Request $request ,Product $adminProduct )
    {
//        return view('admin.product.create', compact('adminProduct'));

    }

    public function update(Request $request, Product $adminProduct )
    {
//        $adminProduct->update($request->except('icon'));
//        if($request->hasfile('icon')) {
//            $filePath = $request->file('icon')->store('products/icons','public');
//            $adminProduct->update([
//                'icon' => $filePath,
//            ]);
//        };
//
//        return redirect()->route('adminProduct.create', ['id' => $request->category_id])->with('success', 'Shop Type Updated Successfully');

    }

    public function destroy(Product $adminProduct)
    {
//        $adminProduct->delete();
//        return redirect()->back()->with('success', 'Shop Type Deleted Successfully');
    }

}
