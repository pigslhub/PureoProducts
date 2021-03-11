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
        if (request()->hasFile('icon') && request()->file('icon')->isValid()) {
            $dir = public_path('storage/subcategories/icons/');
            if (!file_exists($dir)) mkdir($dir, 0777, true);
            $image = Image::make(request()->file('icon'));
            $image->resize(800, 800)->save($dir . '/' . $subcategory->id . '-700x1200.jpg');
            $subcategory->update(['icon' => "/subcategories/icons/{$subcategory->id}-700x1200.jpg"]);
        }

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

        if (request()->hasFile('icon') && request()->file('icon')->isValid()) {
            $dir = public_path('storage/subcategories/icons/');
            if (!file_exists($dir)) mkdir($dir, 0777, true);
            $image = Image::make(request()->file('icon'));
            $image->resize(800, 800)->save($dir . '/' . $adminSubCategory->id . '-800x800.jpg');
            $adminSubCategory->update(['icon' => "/subcategories/icons/{$adminSubCategory->id}-800x800.jpg"]);
        }

       return redirect()->route('adminSubCategories.create', ['id' => $request->category_id])->with('success', 'Sub Category Updated Successfully');

    }

    public function destroy(SubCategory $adminSubCategory)
    {
        $adminSubCategory->delete();
       return redirect()->back()->with('success', 'Sub Category Deleted Successfully');
    }

}
