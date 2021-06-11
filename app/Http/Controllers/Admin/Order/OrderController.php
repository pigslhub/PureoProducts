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
    public function index()
    {
        $orders = Order::get();
        return view('admin.orders.index', compact('orders'));
    }

    public function loadOrderReceipt(Request $request)
    {
        $product = Product::where('id', $request->product_id)->first();
        $productInCart = Cart::where(['product_id'=> $request->product_id,'purchased' => '0'])->first();

        if ($productInCart != null) {

            $productInCart->update([
                    "qty" => $productInCart->qty + $request->quantity,
                    "total" => $productInCart->total + $product->selling_price * $request->quantity
                ]);

            } else {
                $cart = Cart::create([
                    "product_id" => $product->id,
                    "qty" => $request->quantity,
                    "price" => $product->selling_price,
                    "total" => $product->selling_price * $request->quantity,
                ]);
            }


//        $notAvailableMessage = "---";
        $totalBill = 0;
//        $orderDetail = Order::where('id',$request->order_id)->first();
//
        $carts = Cart::where('purchased', '0')->get();

        $htmlForReceiptToLoad = "

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


        foreach ($carts as $cart) {
            $totalBill += $cart->total;
            $htmlForReceiptToLoad = $htmlForReceiptToLoad . "<tr class='qtystyle'>
                                        <td>" . $cart->product->name . "</td>
                                        <td>" . $cart->qty . "</td>
                                        <td>" . $cart->price . "</td>
                                        <td>" . $cart->price * $cart->qty . "</td>
                                       </tr>";

        }

        $htmlForReceiptToLoad = $htmlForReceiptToLoad . "
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td class='foot foot1' >Total Bill</td>
                                        <td class='foot totalbillamount' >" . $totalBill . "</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td class='foot foot1' >Discount</td>
                                        <td class='foot1' > <input type='text' name='discount' class='form-control discountfield' > </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td class='foot foot1' >Net Bill</td>
                                        <td class='foot1' ><label class='lblNetBill'></label> </td>
                                    </tr>
                                </tfoot>
                            </table>
                            ";


        return $htmlForReceiptToLoad;
    }

    public function loadOrderReceiptOnStartup(Request $request)
    {
        $totalBill = 0;
//        $orderDetail = Order::where('id',$request->order_id)->first();
//
        $carts = Cart::where('purchased', '0')->get();


        $htmlForReceiptToLoad = "

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


        foreach ($carts as $cart) {
            $totalBill += $cart->total;
            $htmlForReceiptToLoad = $htmlForReceiptToLoad . "<tr class='qtystyle'>
                                        <td>" . $cart->product->name . "</td>
                                        <td>" . $cart->qty . "</td>
                                        <td>" . $cart->price . "</td>
                                        <td>" . $cart->price * $cart->qty . "</td>
                                       </tr>";
        }

        $htmlForReceiptToLoad = $htmlForReceiptToLoad . "
                            </tbody>
                                <tfoot>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td class='foot foot1' >Total Bill</td>
                                        <td class='foot' >" . $totalBill . "</td>
                                    </tr>
                                </tfoot>
                        </table>
                    ";


        return $htmlForReceiptToLoad;
    }

    public function completeOrderOnPrint(Request $request)
    {
        $carts = Cart::where('purchased', '0')->get();
        $totalBill = 0;
        foreach ($carts as $cart) {
            $totalBill += $cart->total;
            $product = Product::where('id', $cart->product_id)->first();
            $product->update([
                'in_stock' => $product->in_stock - $cart->qty
            ]);
        }

        $order = Order::create([
            "amount" => $totalBill,
            "purchased" => '1',
            "status" => '1',
            "product_id" =>  $product->id,
            "discount" => $request->discount
        ]);

        Cart::where('purchased', '0')->update([
            "purchased" => "1",
            "order_id" => $order->id,
        ]);

        return 1;
    }
}
