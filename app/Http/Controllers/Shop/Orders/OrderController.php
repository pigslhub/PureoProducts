<?php

namespace App\Http\Controllers\Shop\Orders;

use App\Models\Chat\Chat;
use App\Models\Chat\Conversation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ShopProduct;
use App\Models\General\Cart;
use App\Models\General\Order;
use App\Models\Product;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification;

class OrderController extends Controller
{

    public function loadOrderReceipt(Request $request)
    {


        $notAvailableMessage = "---";
        $totalBill =0;
        $orderDetail = Order::where('order_id',$request->order_id)->first();

        $carts = Cart::where('order_id',$request->id)->get();

        if($orderDetail->driver !=null)
        {
            $htmlForReceiptToLoad = "<div class='row wrapper' width:'100%'>
                                         <div id='receiptCustomerName' class='col-md-6'><i class='fa fa-user'></i>&nbsp;&nbsp;".$orderDetail->customer->name."</div>
                                         <div id='receiptCustomerPhoneNo' class='col-md-6'><i class='fa fa-phone'></i>&nbsp;&nbsp;".$orderDetail->customer->phone."</div>
                                    </div>
                                     <div class='row wrapper' width:'100%'>
                                         <div id='receiptDriverName' class='col-md-6'><i class='fa fa-car'></i>&nbsp;&nbsp;".$orderDetail->driver->name  ."</div>
                                         <div id='receiptDriverPhoneNo' class='col-md-6'><i class='fa fa-phone'></i>&nbsp;&nbsp;".$orderDetail->driver->phone."</div>
                                     </div>
                                    <div class='table-responsive'>
                                        <table class='table mainbill'>
                                        <thead>
                                            <tr width='100%'>
                                                <th class='bill'>Item</th>
                                                <th class='bill'>Qty</th>
                                                <th class='bill'>Price</th>
                                                <th class='bill'>Total</th>
                                            </tr>
                                       </thead>
                                       <tbody>

                                    ";


                                    foreach($carts as $cart)
                                    {
                                        $totalBill +=$cart->total;
                                        $htmlForReceiptToLoad = $htmlForReceiptToLoad."<tr class='qtystyle'>
                                        <td>".$cart->product->product_name."</td>
                                        <td>".$cart->qty."</td>
                                        <td>".$cart->price."</td>
                                        <td>".$cart->total."</td>
                                       </tr>";

                                    }

                                $htmlForReceiptToLoad = $htmlForReceiptToLoad."
                                        </tbody>

                                <tfoot>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class='foot foot1' >Total Price</td>
                                            <td class='foot' >".$totalBill."</td>
                                        </tr>
                                </tfoot>


                                </table>


                                ";
                    return $htmlForReceiptToLoad;


            }else
            {
                return "<h4>We are sorry! The order is not accepted by any driver. You cannot generate its receipt. <h4>";
            }




    }

    public function loadAllOrders(Request $request)
    {
//        dd(auth()->user('shop')->id);
        $shop_id = auth()->user()->id;
        $onGoingOrders = Order::with('shop', 'customer', 'driver', 'conversation')->whereIn('status', ['place', 'accept'])->where('shop_id', $shop_id)->get();
//        dd($onGoingOrders->toArray());
        $completeOrders = Order::with('shop', 'customer', 'driver', 'conversation')->whereIn('status', ['complete'])->where('shop_id', $shop_id)->get();
        $readyOrders = Order::with('shop', 'customer', 'driver', 'conversation')->whereIn('status', ['ready'])->where('shop_id', $shop_id)->get();
        $cancelOrders = Order::with('shop', 'customer', 'driver', 'conversation')->whereIn('status', ['cancel'])->where('shop_id', $shop_id)->get();
        return view('shop.orders.index', compact('onGoingOrders', 'completeOrders', 'readyOrders', 'cancelOrders'));
    }

    public function showAllChats(Conversation $conversation)
    {
        $status = Order::get('status');
//        dd($status->toArray());
        $chats = Chat::where('conversation_id', $conversation->id)->get();
        return view('shop.conversation.index', compact('chats', 'status'));
    }

    public function onGoingToReady(Order $order)
    {
        if($order->id){
            $order->update([
                'status' => 'ready',
            ]);
        }
        $factory = (new Factory)->withServiceAccount(base_path() . "/firebase/firebaseKey.json");
        $messaging = $factory->createMessaging();
            $message = CloudMessage::withTarget('token', $order->driver->fcm_token)
                ->withNotification(Notification::fromArray([
                    'title' => "Confirmation about (".$order->order_id.")",
                    'body' => "Order is ready for pick up.",
                    'image' => "https://firebasestorage.googleapis.com/v0/b/ezcare2go-c8d45.appspot.com/o/logo.png?alt=media&token=59b7e17c-c036-4124-a9ef-00516b9ad698",
                ]));
        $messaging->send($message);
        return redirect()->back();
    }

    public function onGoingToCancel(Order $order)
    {
        if($order->id){
            $order->update([
                'status' => 'cancel',
            ]);
        }
        $factory = (new Factory)->withServiceAccount(base_path() . "/firebase/firebaseKey.json");
        $messaging = $factory->createMessaging();
        $messaging1 = $factory->createMessaging();
                $message = CloudMessage::withTarget('token', $order->driver->fcm_token)
                ->withNotification(Notification::fromArray([
                    'title' => "We are sorry!",
                    'body' => "Order has been canceled by shop.",
                    'image' => "https://firebasestorage.googleapis.com/v0/b/ezcare2go-c8d45.appspot.com/o/logo.png?alt=media&token=59b7e17c-c036-4124-a9ef-00516b9ad698",
                ]));
                $message1 = CloudMessage::withTarget('token', $order->customer->fcm_token)
                ->withNotification(Notification::fromArray([
                    'title' => "We are sorry!",
                    'body' => "Order has been canceled by shop.",
                    'image' => "https://firebasestorage.googleapis.com/v0/b/ezcare2go-c8d45.appspot.com/o/logo.png?alt=media&token=59b7e17c-c036-4124-a9ef-00516b9ad698",
                ]));

        $messaging->send($message);
        $messaging1->send($message1);

        return redirect()->back();
    }

    public function readyToComplete(Order $order)
    {
        if($order->id){
            $order->update([
                'status' => 'complete',
            ]);
        }
        return redirect()->back();
    }

    public function loadAllProductsAgainstCategory(Request $request)
    {

        $allProducts = ShopProduct::with('product')->where(['shop_id'=>auth('shop')->user()->id, 'category_id'=>$request->category_id])->get();
        if($allProducts->count()>0)
        {
            $showAllProduct = "";
            foreach($allProducts as $product)
            {
                $showAllProduct .= "<div class='card shadow-lg p-2 m-2 col-md-2 text-center'>
                    <img src='".asset('storage/'.$product->product->icon)."' style='height:60px;width:60px;border-radius:50%;margin:auto' alt='no img' />
                    <p>".$product->product->product_name."</p>
                    <div class='row'>
                    <div style='cursor:pointer' class='col-md-6 btn-remove-cart'><i class='fa fa-minus' price='".$product->price."'  productid='".$product->product->id."' btnfor='remove'></i></div>
                    <div style='cursor:pointer' class='col-md-6 btn-add-cart'><i class='fa fa-plus' price='".$product->price."' productid='".$product->product->id."' btnfor='add'></i></div>
                    </div>
                </div>";
            }
             return $showAllProduct;
        }else
        {
            return "<h4>You are not providing any service with the selected subcategory.</h4>";
        }

    }

    public function createManualReceipt(Request $request)
    {

        switch($request->action)
        {
            case "add":
                    $alreadyExistedCartItem = Cart::where(['order_id'=> $request->order_id,'product_id' => $request->product_id, 'customer_id' => $request->customer_id, 'purchased' => 1])->first();
                    if ($alreadyExistedCartItem) {
                        $res = $alreadyExistedCartItem->update([
                            "qty" => $alreadyExistedCartItem->qty += 1,
                            "total" => $alreadyExistedCartItem->total + $alreadyExistedCartItem->price

                        ]);
                        if ($res) {
                            return "update";
                        } else {
                            return "noupdate";
                        }
                    } else {
                        $cart = Cart::create($request->all());
                        if ($cart) {
                            return "added";
                        } else {
                            return "noadded";
                        }
                    }
                break;

            case "remove":
                // $alreadyExisted = Cart::where(['order_id'=> $request->order_id,'product_id' => $request->product_id, 'customer_id' => $request->customer_id, 'purchased' => 1])->first();

                $alreadyExistedCartItem = Cart::where(['order_id'=> $request->order_id,'product_id' => $request->product_id, 'customer_id' => $request->customer_id, 'purchased' => 1])->first();
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
                break;

        }
    }


}
