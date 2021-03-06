<?php

namespace App\Http\Controllers\Shop\ShopProduct;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ShopProduct;

class ShopProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shopType = auth()->user('shop')->shop_type_id;

        $categories = Category::where('shop_type_id',$shopType)->get();
        // dd($categories);
        return view('shop.shopproduct.index' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($category_id)
    {
        $products = Product::where('category_id', $category_id)->get();
        return view('shop.shopproduct.create' , compact('products','category_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          if($request->product_select !=null )
          {
            foreach($request->product_select as $singleProduct)
            {
                ShopProduct::create([
                    "product_id" => $singleProduct,
                    "category_id" => $request->category_id,
                    "shop_id" => $request->shop_id,
                ]);
            }

            return redirect()->back()->with("success","Products Loaded Successfully.");
          }else
          {
            return redirect()->back()->with("error","Nothing to load.");
          }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
