<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\General\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::with('product')->where(['customer_id'=>auth('customer')->user()->id,'purchased'=>'0'])->get();
        return view('frontend.cart.yourCart',compact('carts'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $product = Product::where('id',$request->product_id)->first();
        Cart::create([
            'product_id' => $request->product_id,
            'qty' => $request->qty,
            'customer_id' => auth('customer')->user()->id,
            'price' => $product->price,
            'total' => $product->price * $request->qty
        ]);

        return redirect()->back()->with('success',"Product added to cart successfully");
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
}
