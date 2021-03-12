<?php

namespace App\Http\Controllers\Admin\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Intervention\Image\Facades\Image;


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
        $category = Category::create($request->except('icon'));
        $category->updateIcon();
        return redirect()->route('adminCategories.index')->with("success", "Category created successfully");
    }

    public function show(Category $category)
    {
         return view('adminCategories.show', compact('category'));
    }

    public function edit(Category $adminCategory)
    {
        return view('admin.category.edit', compact('adminCategory'));
    }

    public function update(Request $request, Category $adminCategory)
    {
        $adminCategory->update($request->except('icon'));
        $adminCategory->updateIcon();

        return redirect()->route('adminCategories.index')->with('success', 'Category Updated Successfully');
    }

    public function destroy(Category $adminCategory)
    {
        $adminCategory->delete();
        return redirect()->back()->with('success', 'Category Deleted Successfully');
    }
}
