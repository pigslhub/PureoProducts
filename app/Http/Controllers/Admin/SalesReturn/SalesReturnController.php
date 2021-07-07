<?php

namespace App\Http\Controllers\Admin\SalesReturn;

use App\Http\Controllers\Controller;
use App\Models\General\Cart;
use App\Models\General\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class SalesReturnController extends Controller
{
    public function index()
    {
        return view('admin.sales_return.index');
    }

    public function orderIndex()
    {
        $orders = Order::get();
        return view('admin.sales_return.orderIndex', compact('orders'));
    }

    public function loadOrderReceipt(Request $request)
    {
        $product = Product::where('id', $request->product_id)->first();
        $productInCart = Cart::where(['product_id' => $request->product_id, 'purchased' => '0'])->first();

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
                                            <th class='bill-action'>Action</th>
                                        </tr>
                                       </thead>
                                      <tbody>

                                    ";


        foreach ($carts as $cart) {
            $totalBill += $cart->total;
            $htmlForReceiptToLoad = $htmlForReceiptToLoad . "<tr class='qtystyle'>
                                        <th class='bill'>" . $cart->product->name . "</th>
                                        <th class='bill'>" . $cart->qty . "</th>
                                        <th class='bill'>" . $cart->price . "</th>
                                        <th class='bill'>" . $cart->price * $cart->qty . "</th>
                                        <td class='bill-action'> <a class='btn btn-xs btn-danger btn-remove' cartid = " . $cart->id . " title='Remove Item'>
                                        <i class='fa fa-trash' style='color: white'></i> </a> </td>
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
                                        <td class='bill-action'></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td class='foot foot1' >Discount</td>
                                        <td class='foot1 bill-action' colspan='2'> <input type='text' name='discount' class='form-control discountfield' > </td>
                                        <td class='discountFieldLabel d-none'><label>.</label></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td class='foot foot1' >Net Bill</td>
                                        <td class='foot1' ><label class='lblNetBill'></label> </td>
                                        <td class='bill-action'></td>
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
                                            <th class='bill-action'>Action</th>
                                        </tr>
                                       </thead>
                                      <tbody>

                                    ";


        foreach ($carts as $cart) {
            $totalBill += $cart->total;
            $htmlForReceiptToLoad = $htmlForReceiptToLoad . "<tr class='qtystyle'>
                                        <td class='bill'>" . $cart->product->name . "</td>
                                        <td class='bill'>" . $cart->qty . "</td>
                                        <td class='bill'>" . $cart->price . "</td>
                                        <td class='bill'>" . $cart->price * $cart->qty . "</td>
                                        <td class='bill-action'> <a class='btn btn-xs btn-danger btn-remove' cartid = " . $cart->id . " title='Remove Item'>
                                        <i class='fa fa-trash' style='color: white'></i> </a> </td>
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
                                        <td class='bill-action'></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td class='foot foot1' >Discount</td>
                                        <td class='foot1 bill-action' colspan='2'> <input type='text' name='discount' class='form-control discountfield' > </td>
                                        <td class='discountFieldLabel d-none'><label>.</label></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td class='foot foot1' >Net Bill</td>
                                        <td class='foot1' ><label class='lblNetBill'></label> </td>
                                        <td class='bill-action'></td>
                                    </tr>
                                </tfoot>
                            </table>
                            ";


        return $htmlForReceiptToLoad;
    }

    public function completeOrderOnPrint(Request $request)
    {
//
        $carts = Cart::where('purchased', '0')->get();
        $totalBill = 0;
        foreach ($carts as $cart) {
            $totalBill += $cart->total;
            $product = Product::where('id', $cart->product_id)->first();
            $product->update([
                'in_stock' => $product->in_stock + $cart->qty
            ]);
        }
        $order = Order::create([
            "amount" => $totalBill,
            "purchased" => '1',
            "status" => '1',
            "product_id" => $product->id,
            "discount" => $request->discount,
            "bill_type" => "return",
        ]);


        Cart::where('purchased', '0')->update([
            "purchased" => "1",
            "order_id" => $order->id,
        ]);

        return 1;
    }



    public function removeReceiptFromCart(Request $request)
    {
        $cart = Cart::where('id', $request->cart_id)->first();
        if ($cart->qty > 1) {
            $cart->update([
                "qty" => $cart->qty - 1,
                "total" => ($cart->qty - 1) * $cart->price
            ]);
        } else {
            $cart->delete();
        }

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
                                            <th class='bill-action'>Action</th>
                                        </tr>
                                       </thead>
                                      <tbody>

                                    ";


        foreach ($carts as $cart) {
            $totalBill += $cart->total;
            $htmlForReceiptToLoad = $htmlForReceiptToLoad . "<tr class='qtystyle'>
                                        <td class='bill'>" . $cart->product->name . "</td>
                                        <td class='bill'>" . $cart->qty . "</td>
                                        <td class='bill'>" . $cart->price . "</td>
                                        <td class='bill'>" . $cart->price * $cart->qty . "</td>
                                        <td class='bill-action'> <a class='btn btn-xs btn-danger btn-remove' cartid = " . $cart->id . " title='Remove Item'>
                                        <i class='fa fa-trash' style='color: white'></i> </a> </td>
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
                                        <td class='bill-action'></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td class='foot foot1' >Discount</td>
                                        <td class='foot1 bill-action' colspan='2'> <input type='text' name='discount' class='form-control discountfield' > </td>
                                        <td class='discountFieldLabel d-none'><label>.</label></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td class='foot foot1' >Net Bill</td>
                                        <td class='foot1' ><label class='lblNetBill'></label> </td>
                                        <td class='bill-action'></td>
                                    </tr>
                                </tfoot>
                            </table>
                            ";


        return $htmlForReceiptToLoad;
    }
}
