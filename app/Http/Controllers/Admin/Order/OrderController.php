<?php

namespace App\Http\Controllers\Admin\Order;

use App\Models\Chat\Chat;
use App\Models\Chat\Conversation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\General\Cart;
use App\Models\General\Order;
use App\Models\Product;
use Carbon\Carbon;

class OrderController extends Controller
{

    public function loadOrderReceipt(Request $request)
    {


        $notAvailableMessage = "---";
        $totalBill =0;
        $orderDetail = Order::where('order_id',$request->order_id)->first();

        $carts = Cart::where('order_id',$orderDetail->id)->get();


        $htmlForReceiptToLoad = "<div  class='row wrapper' width:'100%'>

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
                                       </tr>";

                                    }

                                $htmlForReceiptToLoad = $htmlForReceiptToLoad."
                                        </tbody>

                                <tfoot>
                                        <tr>
                                            <td></td>
                                            <td class='foot foot1' >Total Price</td>
                                            <td class='foot' >".$totalBill."</td>
                                        </tr>
                                </tfoot>


                                </table>


                                ";


        return $htmlForReceiptToLoad;
    }

    public function loadAllOrders(Request $request)
    {
        $onGoingOrders = Order::with('carts','customer')->whereIn('status', ['place'])->get();
        $completeOrders = Order::with('carts', 'customer')->whereIn('status', ['complete'])->get();
        $shippedOrder = Order::with('carts', 'customer')->whereIn('status', ['ship'])->get();
        $cancelOrders = Order::with('carts', 'customer', 'driver', 'conversation')->whereIn('status', ['cancel'])->get();
        return view('admin.orders.index', compact('onGoingOrders', 'completeOrders', 'shippedOrder', 'cancelOrders'));
    }

    public function loadAllOrdersForChart(Request $request)
    {
        $allOnGoingOrders = Order::with('shop', 'customer', 'driver', 'conversation')->whereIn('status', ['place', 'accept'])->get();
        $allCompleteOrders = Order::with('shop', 'customer', 'driver', 'conversation')->whereIn('status', ['complete'])->get();
        $allReadyOrders = Order::with('shop', 'customer', 'driver', 'conversation')->whereIn('status', ['ready'])->get();
        $allCancelOrders = Order::with('shop', 'customer', 'driver', 'conversation')->whereIn('status', ['cancel'])->get();
        return json_encode(["allongoing" => $allOnGoingOrders->count(), "allcomplete" => $allCompleteOrders->count(), "allready" => $allReadyOrders->count(), "allcancel" => $allCancelOrders->count()]);
    }

    public function loadMonthlyOrdersForChart(Request $request)
    {
        $startDate = Carbon::now()->subDays(30);
        $endDate = Carbon::now();

        $monthlyOnGoingOrders = Order::with('shop', 'customer', 'driver', 'conversation')
            ->whereIn('status', ['place', 'accept'])
            ->whereBetween('created_at', [$startDate, $endDate])->get();

        $monthlyCompleteOrders = Order::with('shop', 'customer', 'driver', 'conversation')
            ->whereIn('status', ['complete'])
            ->whereBetween('created_at', [$startDate, $endDate])->get();
//
        $monthlyReadyOrders = Order::with('shop', 'customer', 'driver', 'conversation')
            ->whereIn('status', ['ready'])
            ->whereBetween('created_at', [$startDate, $endDate])->get();
//
        $monthlyCancelOrders = Order::with('shop', 'customer', 'driver', 'conversation')
            ->whereIn('status', ['cancel'])
            ->whereBetween('created_at', [$startDate, $endDate])->get();

        return json_encode(["monthlyongoing" => $monthlyOnGoingOrders->count(), "monthlycomplete" => $monthlyCompleteOrders->count(), "monthlyready" => $monthlyReadyOrders->count(), "monthlycancel" => $monthlyCancelOrders->count()]);
    }

    public function loadWeeklyOrdersForChart(Request $request)
    {
        $startDate = Carbon::now()->subDays(7);
        $endDate = Carbon::now();

        $weeklyOnGoingOrders = Order::with('shop', 'customer', 'driver', 'conversation')
            ->whereIn('status', ['place', 'accept'])
            ->whereBetween('created_at', [$startDate, $endDate])->get();

        $weeklyCompleteOrders = Order::with('shop', 'customer', 'driver', 'conversation')
            ->whereIn('status', ['complete'])
            ->whereBetween('created_at', [$startDate, $endDate])->get();

        $weeklyReadyOrders = Order::with('shop', 'customer', 'driver', 'conversation')
            ->whereIn('status', ['ready'])
            ->whereBetween('created_at', [$startDate, $endDate])->get();

        $weeklyCancelOrders = Order::with('shop', 'customer', 'driver', 'conversation')
            ->whereIn('status', ['cancel'])
            ->whereBetween('created_at', [$startDate, $endDate])->get();

        return json_encode(["weeklyongoing" => $weeklyOnGoingOrders->count(), "weeklycomplete" => $weeklyCompleteOrders->count(), "weeklyready" => $weeklyReadyOrders->count(), "weeklycancel" => $weeklyCancelOrders->count()]);
    }

    public function showAllChats(Conversation $conversation)
    {
        $status = Order::get('status');
//        dd($status->toArray());
        $chats = Chat::where('conversation_id', $conversation->id)->get();
        return view('admin.conversation.index', compact('chats', 'status'));
    }

    public function onGoingToReady(Order $order)
    {
        if($order->id){
            $order->update([
                'status' => 'ready',
            ]);
        }
        return redirect()->back();
    }

    public function onGoingToCancel(Order $order)
    {
        if($order->id){
            $order->update([
                'status' => 'cancel',
            ]);
        }
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


}
