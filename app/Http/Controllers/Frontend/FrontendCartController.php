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
        if(auth('customer')->user() == null )
        {
            return redirect(route('customer.login'))->with('danger', "Login your account before cart.");
        }else
        {
            $product = Product::where('id', $request->product_id)->first();
            if ($request->qty < 6) {
                Cart::create([
                    'product_id' => $request->product_id,
                    'qty' => $request->qty,
                    'customer_id' => auth('customer')->user()->id,
                    'price' => $product->price,
                    'total' => $product->price * $request->qty,
                ]);
            }
            else {
                Cart::create([
                    'product_id' => $request->product_id,
                    'qty' => $request->qty,
                    'customer_id' => auth('customer')->user()->id,
                    'price' => $product->wholesalePrice,
                    'total' => $product->wholesalePrice * $request->qty,
                ]);
            }

            return redirect()->back()->with('success', "Product added to cart successfully");
        }

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, Cart $cart)
    {
        if ($request->qty < 6) {
            $cart->update([
                "price" => $cart->product->price,
                "qty" => $request->qty,
                "total" => $cart->product->price * $request->qty
            ]);
        }
        else {
            $cart->update([
                "price" => $cart->product->wholesalePrice,
                "qty" => $request->qty,
                "total" => $cart->product->wholesalePrice * $request->qty
            ]);
        }

        return redirect()->back()->with('success',"Cart Updated Successfully");
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();
        return redirect()->back()->with('success', "Cart Deleted Successfully");
        // dd($cart->toArray());
    }
}
