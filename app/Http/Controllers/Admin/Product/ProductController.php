<?php

namespace App\Http\Controllers\Admin\Product;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Intervention\Image\Facades\Image;


class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index');
    }


    public function create(Request $request)
    {
        $sub_category_id = $request->id;
        $adminProducts = Product::where('subcategory_id',$request->id)->get();
        return view('admin.product.create',compact('adminProducts', 'sub_category_id'));
    }

    public function store(Request $request)
    {
       $product = Product::create($request->except('icon'));


            if (request()->hasFile('icon') && request()->file('icon')->isValid()) {
                $dir = public_path('storage/products/icons/');
                if (!file_exists($dir)) mkdir($dir, 0777, true);
                $image = Image::make(request()->file('icon'));
                $image->fit(400, 400)->save($dir . '/' . $product->id .'-400x400.jpg');
                $product->update(['icon' => "/products/icons/{$product->id}-400x400.jpg"]);
            }

       return redirect()->back()->with("success", "Product Added Successfully");
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
        $adminProducts = Product::where('subcategory_id',$request->subcategory_id)->get();
//        dd($adminProductsAfterEdit->toArray());
       $adminProduct->update($request->except('icon'));
        if (request()->hasFile('icon') && request()->file('icon')->isValid()) {
            $dir = public_path('storage/products/icons/');
            if (!file_exists($dir)) mkdir($dir, 0777, true);
            $image = Image::make(request()->file('icon'));
            $image->fit(400, 400)->save($dir . '/' . $adminProduct->id . '-400x400.jpg');
            $adminProduct->update(['icon' => "/products/icons/{$adminProduct->id}-400x400.jpg"]);
        }


       return redirect()->route('adminProducts.create', ['id' => $request->subcategory_id])->with('success', 'Product Updated Successfully');
//        return redirect()->back()->with("success", "Product Added Successfully");

    }

    public function destroy(Product $adminProduct)
    {
       $adminProduct->delete();
       return redirect()->back()->with('success', 'Product Deleted Successfully');
    }

}
