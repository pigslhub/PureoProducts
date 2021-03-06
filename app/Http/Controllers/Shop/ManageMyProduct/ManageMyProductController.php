<?php

namespace App\Http\Controllers\Shop\ManageMyProduct;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ShopProduct;

class ManageMyProductController extends Controller
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
        return view('shop.managemyproduct.index' , compact('categories') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($category_id)
    {  
        $shopId = auth()->user('shop')->id;
        
        $loadedProducts = ShopProduct::where('shop_id', $shopId)->where('category_id',$category_id)->get();
        // $product_id = ShopProduct::where('shop_id', $shopId)->where('category_id',$category_id)->get();

        // dd($loadedProducts->load('product')->toArray());
        return view('shop.managemyproduct.create' , compact('loadedProducts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , ShopProduct $id)
    {
         

         foreach($request->prices as $singlePrice)
         {
            // print_r("<pre>"); 
            // print_r($singlePrice['price']);  
            ShopProduct::where('id',$singlePrice['product_id'])->update([
                "price" => $singlePrice['price']
            ]); 
         }
        

        
        return redirect(route('manageMyProducts.index'))->with("success", "price updated successfully");
        
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
