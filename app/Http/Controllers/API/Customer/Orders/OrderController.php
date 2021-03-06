<?php

namespace App\Http\Controllers\API\Customer\Orders;

use App\Http\Controllers\Controller;
use App\Models\General\Cart;
use App\Models\Customer;
use App\Models\General\Order;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification;

class OrderController extends Controller
{

    public function addToCart(Request $request)
    {

        $alreadyExistedCartItem = Cart::where(['product_id' => $request->product_id, 'customer_id' => $request->customer_id, 'purchased' => 0])->first();
        if ($alreadyExistedCartItem) {
            $res = $alreadyExistedCartItem->update([
                "qty" => $alreadyExistedCartItem->qty += 1,
                "total" => $alreadyExistedCartItem->total + $alreadyExistedCartItem->price

            ]);
            if ($res) {
                return response()->json(['update' => "yes"]);
            } else {
                return response()->json(['update' => "no"]);
            }
        } else {
            $cart = Cart::create($request->all());
            if ($cart) {

                return response()->json(['added' => "yes"]);
            } else {
                return response()->json(['added' => "no"]);
            }
        }

        //  dd($cart->toArray());
        //  Order::where('customer_id' = $request->customer_id )->where('purchased', 0)->get();

    }

    public function completeOrder(Request $request)
    {
        $order = Order::where('customer_id', $request->customer_id)->where('purchased', 0)->where('has_cart',1)->first();
        $customer = Customer::where('id',$request->customer_id)->first();
        $totalAmountForOrder = 0;
        if ($order == null) {
            $order = Order::create($request->all());
            $orderRes = $order->update([
                'purchased' => 1,
                'order_id' => Str::random(10),
                'status' => 'place',
                'due_time' => $request->due_time,
                'checkout_session' => $request->checkout_session
            ]);

            $carts = Cart::where('customer_id', $request->customer_id)->where('purchased', 0)->get();
            if ($carts) {
                foreach ($carts as $cart) {
                    $totalAmountForOrder = $totalAmountForOrder + $cart->total;
                }
                $cart = Cart::where('customer_id', $request->customer_id)->where('purchased', 0)->update([
                    'order_id' => $order->id,
                    'purchased' => 1
                ]);
                $orderRes = $order->update([
                    'amount' => $totalAmountForOrder,
                ]);
            }

            $firebase = (new Factory)->withServiceAccount(base_path() . "/firebase/firebaseKey.json");
            $messaging = $firebase->createMessaging();
            
            $customerZipCodes = _getAllCustomerZipCodes($request->customer_id); 
            $deviceTokens = Driver::whereIn('zip_code',$customerZipCodes)->get('fcm_token');
            $fcm_Array = array();
            foreach ($deviceTokens as $token) {
                $fcm_Array[] = $token->fcm_token;
            }
            $message = CloudMessage::new()->withNotification(Notification::fromArray([
                'title' => "Good News!",
                'body' => "New job Available",
                'image' => "https://firebasestorage.googleapis.com/v0/b/ezcare2go-c8d45.appspot.com/o/logo.png?alt=media&token=59b7e17c-c036-4124-a9ef-00516b9ad698",
            ]));
            $report = $messaging->sendMulticast($message, $fcm_Array);


            // if ($report->hasFailures()) {
            //     foreach ($report->failures()->getItems() as $failure) {
            //         echo $failure->error()->getMessage() . PHP_EOL;
            //     }
            // }


            if ($orderRes && $cart) {
                return response()->json(['checkOut' => "yes"]);
            } else {
                return response()->json(['checkOut' => "no"]);
            }
        }else
        {
            $order = Order::create($request->all());
            $orderRes = $order->update([
                'purchased' => 1,
                'order_id' => Str::random(10),
                'status' => 'place',
            ]);
        }
    }


     public function completeOrderWithNoHasCart(Request $request)
    {
        $order = Order::where(['id'=>$request->order_id])->first();
        
        $res = $order->update([
                "checkout_session" => $request->checkout_session,
                "amount" => $request->amount,
                "status" => "complete",
                "shop_rating" => $request->shop_rating,
                "driver_rating" => $request->driver_rating,
                
                
            ]);
            
        if($res)
        {
            return response()->json(['checkOut' => "yes"]);
        }else
        {
            return response()->json(['checkOut' => "no"]);
        }
        
    }


    public function removeFromCart(Request $request)
    {

        $alreadyExistedCartItem = Cart::where('id', $request->cart_id)->first();
        if ($alreadyExistedCartItem) {
            if ($alreadyExistedCartItem->qty > 1) {
                $update = $alreadyExistedCartItem->update([
                    "qty" => $alreadyExistedCartItem->qty -= 1,
                    "total" => $alreadyExistedCartItem->total - $alreadyExistedCartItem->price
                ]);

                if ($update) {
                    return response()->json(['remove' => "yes"]);
                } else {
                    return response()->json(['remove' => "no"]);
                }
            } else {

                $remove = $alreadyExistedCartItem->delete();
                if ($remove) {
                    return response()->json(['remove' => "yes"]);
                } else {
                    return response()->json(['remove' => "no"]);
                }
            }
        }
    }

    public function onGoindOrders(Request $request)
    {
        //  dd('reached');
        $onGoingOrders = Order::where('customer_id', $request->customer_id)->where('purchased', 1)->whereIn('status', ['place','accept','ready'])->get();
        $onGoingOrders->load('shop','customer','driver','conversation');
        return response()->json(['ongoing_orders' => $onGoingOrders]);
    }
    public function getCancelOrders(Request $request)
    {
        $cancelOrders = Order::where('customer_id', $request->customer_id)->where('purchased', 1)->where('status', 'cancel')->get();
        $cancelOrders->load('shop','customer','driver','conversation');
        return response()->json(['reject_orders' => $cancelOrders]);
    }
    public function getCompleteOrders(Request $request)
    {
        $CompleteOrders = Order::where('customer_id', $request->customer_id)->where('purchased', 1)->where('status', 'complete')->get();
        $CompleteOrders->load('shop','customer','driver','conversation');
        return response()->json(['completed_orders' => $CompleteOrders]);
    }
    public function viewCart(Request $request)
    {
        $viewCart = Cart::where('customer_id', $request->customer_id)->where('purchased', 0)->get();
        $viewCart->load('product');
        return response()->json(['view_cart' => $viewCart]);
    }

    public function SingleOrderCartDetails(Request $request)
    {
        $singleOrderCart = Cart::where('order_id', $request->order_id)->get();
        $singleOrderCart->load('product');
        return response()->json(['carts' => $singleOrderCart]);
    }
    public function markOrderAsCancel(Request $request)
    {
        $orderCancel = Order::where('id', $request->order_id)->first();
        $res = $orderCancel->update([
            "status" => "cancel"
        ]);
        
        if ($res > 0) {
            $firebase = (new Factory)->withServiceAccount(base_path() . "/firebase/firebaseKey.json");
             $messaging = $firebase->createMessaging();
             $message = CloudMessage::withTarget('token', $orderCancel->driver->fcm_token)
                ->withNotification(Notification::fromArray([
                    'title' => "We are sorry!",
                    'body' => $orderCancel->customer->name." has canceled the order.",
                    'image' => "https://firebasestorage.googleapis.com/v0/b/ezcare2go-c8d45.appspot.com/o/logo.png?alt=media&token=59b7e17c-c036-4124-a9ef-00516b9ad698",
                ]));

            $messaging->send($message);
            return response()->json(['cancel' => "yes"]);
        } else {
            return response()->json(['cancel' => "no"]);
        }
    }
    public function markOrderAsComplete(Request $request)
    {
        $order = Order::where('id', $request->order_id)->first();
       $res = $order->update([
            "status" => "complete",
            "shop_rating" => $request->shop_rating,
            "driver_rating" => $request->driver_rating
        ]);
        if ($res > 0) {
             $firebase = (new Factory)->withServiceAccount(base_path() . "/firebase/firebaseKey.json");
             $messaging = $firebase->createMessaging();
             $message = CloudMessage::withTarget('token', $order->driver->fcm_token)
                ->withNotification(Notification::fromArray([
                    'title' => "Congratulations!",
                    'body' => $order->customer->name." has marked the order as completed.",
                    'image' => "https://firebasestorage.googleapis.com/v0/b/ezcare2go-c8d45.appspot.com/o/logo.png?alt=media&token=59b7e17c-c036-4124-a9ef-00516b9ad698",
                ]));
            $messaging->send($message);
            return response()->json(['complete' => "yes"]);
        } else {
            return response()->json(['complete' => "no"]);
        }
    }
}
