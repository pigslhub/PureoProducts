<?php

namespace App\Http\Controllers\Admin\SubCategory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use phpDocumentor\Reflection\Types\True_;

class SubCategoryController extends Controller
{
    public function index()
    {
        return view('admin.subcategory.index');
    }

    // public function create(Request $request)
    // {
    //     $categories = SubCategory::where('shop_type_id',$request->shop_type_id)->get();
    //     return view('admin.subcategory.create',compact('categories'));
    // }
    public function create(Request $request)
    {
        // dd($request->id);
        $category_id = $request->id;
        $subcategories = SubCategory::where('category_id',$request->id)->get();
        return view('admin.subcategory.create',compact('subcategories', 'category_id'));
    }

    public function store(Request $request)
    {
//        $subcategory = SubCategory::create($request->except('icon'));
//        if ($request->hasFile('icon')) {
//            $filePath = $request->file('icon')->store('categories/icons', 'public');
//            $subcategory->update([
//                "icon" => $filePath
//            ]);
//        }

//        return redirect()->back()->with("success", "Shop Type created successfully");
    }

    public function show(SubCategory $subcategory)
    {
        // return view('adminCategorys.show', compact('$subcategory'));
    }

    public function edit(Request $request ,SubCategory $subcategory )
    {
//        return view('admin.subcategory.create', compact('$subcategory'));

    }

    public function update(Request $request, SubCategory $subcategory )
    {
//        $adminCategory->update($request->except('icon'));
//        if($request->hasfile('icon')) {
//            $filePath = $request->file('icon')->store('categories/icons','public');
//            $adminCategory->update([
//                'icon' => $filePath,
//            ]);
//        };
//
//        return redirect()->route('adminCategory.create', ['id' => $request->shop_type_id])->with('success', 'Shop Type Updated Successfully');

    }

    public function destroy(SubCategory $subcategory)
    {
//        $adminCategory->delete();
//        return redirect()->back()->with('success', 'Shop Type Deleted Successfully');
    }

}
