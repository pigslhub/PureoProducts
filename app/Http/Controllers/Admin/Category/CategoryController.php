<?php

namespace App\Http\Controllers\Admin\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {

        return view('admin.category.create');
    }

    public function store(Request $request)
    {
//        $category = ShopType::create($request->except('icon'));
//        if ($request->hasFile('icon')) {
//            $filePath = $request->file('icon')->store('shoptypes/icons', 'public');
//            $category->update([
//                "icon" => $filePath
//            ]);
//        }
//
//        return redirect()->route('adminShopTypes.index')->with("success", "Shop Type created successfully");
    }

    public function show(ShopType $shopType)
    {
        // return view('adminShopTypes.show', compact('shopType'));
    }

    public function edit(Request $request, ShopType $adminShopType)
    {
//        return view('admin.category.edit', compact('adminShopType'));
    }

    public function update(Request $request, ShopType $adminShopType)
    {
//        $adminShopType->update($request->except('icon'));
//        if ($request->hasfile('icon')) {
//            $filePath = $request->file('icon')->store('shoptypes/icons', 'public');
//            $adminShopType->update([
//                'icon' => $filePath,
//            ]);
//        };
//        return redirect()->route('adminShopTypes.index')->with('success', 'Shop Type Updated Successfully');
    }

    public function destroy(Category $adminShopType)
    {
//        $adminShopType->delete();
//        return redirect()->back()->with('success', 'Shop Type Deleted Successfully');
    }
}
