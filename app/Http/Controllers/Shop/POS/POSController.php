<?php

namespace App\Http\Controllers\Shop\POS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\General\Order;
use App\Models\Product;

class POSController extends Controller
{
   
    public function index()
    {
        $shop_type_id = auth()->user('shop')->shop_type_id;
        
        $categories = Category::where('shop_type_id',$shop_type_id)->get();
        // dd($categories->toArray());
        return view('shop.pos.dashboard' , compact('categories'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }


    public function loadProductsViaAjax(Request $request)
    {
        $allProducts = Product::where('category_id',$request->category_id)->get();
        $productToLoad = "";
            foreach($allProducts as $product)
            {
                $productToLoad .= 
                "<button value=".$product->id." class='col-md-2 btn btn-dark text-center shadow pt-2 pb-2 btnProduct'>
                            <img src='".asset('storage/'.$product->icon)."' style='height:50px;width:50px;border-radius:50%' />
                            <p>".$product->product_name."</p>
                        
                    </button>";
            }
        return $productToLoad;
    }

    
}
