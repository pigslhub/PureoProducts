<?php

namespace App\Http\Controllers\API\Customer\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General\Cart;
use App\Models\General\Order;

class PaymentController extends Controller
{
    public function createSession(Request $request)
    {
        $carts = Cart::where('customer_id', $request->customer_id)->where('purchased', 0)->get();
        $cartForStripe = array();
        foreach($carts as $cart)
        {
            $singleCart = array(
                    'name' => $cart->product->product_name,
                    'images' => ['https://www.ezcare2go.com/storage/'.$cart->product->icon],
                    'amount' => $cart->price*100,
                    'currency' => 'USD',
                    'quantity' => $cart->qty,
            );
            array_push($cartForStripe,$singleCart);
        }
        $stripe = new \Stripe\StripeClient(
            'sk_test_bAnYzlXvZ8HE0QPKk4b7qV8V008qbkGp2v'
        );
        $session = $stripe->checkout->sessions->create([
            // 'billing_address_collection' => 'required',
            'success_url' => 'https://ezcare2go.com/login/shop?sc_checkout=success&sc_sid={CHECKOUT_SESSION_ID}',
            'cancel_url' => 'https://ezcare2go.com?sc_checkout=cancel',
            // 'success_url' => 'http://127.0.0.1:8000/login/shop?sc_checkout=success',
            // 'cancel_url' => 'http://127.0.0.1:8000?sc_checkout=cancel',
            'payment_method_types' => ['card'],
            'line_items' => $cartForStripe,
            'mode' => 'payment',
        ]);


        return response()->json(['id' => $session->id]);

    }
    
    public function createSessionWithNoHasCart(Request $request)
    {
        $carts = Cart::where(['order_id'=>$request->order_id,'customer_id'=> $request->customer_id,'purchased'=> 1])->get();
        $cartForStripe = array();
        foreach($carts as $cart)
        {
            $singleCart = array(
                    'name' => $cart->product->product_name,
                    'images' => ['https://www.ezcare2go.com/storage/'.$cart->product->icon],
                    'amount' => $cart->price*100,
                    'currency' => 'USD',
                    'quantity' => $cart->qty,
            );
            array_push($cartForStripe,$singleCart);
        }
        $stripe = new \Stripe\StripeClient(
            'sk_test_bAnYzlXvZ8HE0QPKk4b7qV8V008qbkGp2v'
        );
        $session = $stripe->checkout->sessions->create([
            // 'billing_address_collection' => 'required',
            'success_url' => 'https://ezcare2go.com/login/shop?sc_checkout=success&sc_sid={CHECKOUT_SESSION_ID}',
            'cancel_url' => 'https://ezcare2go.com?sc_checkout=cancel',
            // 'success_url' => 'http://127.0.0.1:8000/login/shop?sc_checkout=success',
            // 'cancel_url' => 'http://127.0.0.1:8000?sc_checkout=cancel',
            'payment_method_types' => ['card'],
            'line_items' => $cartForStripe,
            'mode' => 'payment',
        ]);


        return response()->json(['id' => $session->id]);

    }
    
    
    public function saveSessionId(Request $request)
    {
        $result = Order::where('id',$request->order_id)->update([
            'checkout_session' => $request->checkout_session_id
        ]);
        if($result)
        {
            return response()->json(['updated' => "yes"]);
        }else
        {
            return response()->json(['updated' => "no"]);
        }


    }
}
