<?php

namespace App\Http\Controllers\Admin\SubCategory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use phpDocumentor\Reflection\Types\True_;
use Intervention\Image\Facades\Image;


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
       $subcategory = SubCategory::create($request->except('icon'));
        $subcategory->updateIcon();

       return redirect()->back()->with("success", "Sub-Category created successfully");
    }

    public function show(SubCategory $subcategory)
    {
        // return view('adminCategorys.show', compact('$subcategory'));
    }

    public function edit(Request $request ,SubCategory $adminSubCategory )
    {
       return view('admin.subcategory.create', compact('adminSubCategory'));

    }

    public function update(Request $request, SubCategory $adminSubCategory )
    {
        $adminSubCategory->update($request->except('icon'));
        $adminSubCategory->updateIcon();
       return redirect()->route('adminSubCategories.create', ['id' => $request->category_id])->with('success', 'Sub Category Updated Successfully');

    }

    public function destroy(SubCategory $adminSubCategory)
    {
        $adminSubCategory->delete();
       return redirect()->back()->with('success', 'Sub Category Deleted Successfully');
    }

}
