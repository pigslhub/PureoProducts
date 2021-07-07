<?php

namespace App\Http\Controllers\Admin\Earning;

use App\Http\Controllers\Controller;
use App\Models\General\Cart;
use App\Models\General\Order;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EarningController extends Controller
{
    public function viewTotalEarning(Request $request)
    {
        $orders = Order::get();

        $totalEarning = 0;
        $purchasePrice = 0;
        $totalProfit = 0;
        $totalDiscounts = 0;

        foreach ($orders as $order) {
            $singleTotalEarning = 0;
            $singlePurchasePrice = 0;
            $singleTotalProfit = 0;
            $singleTotalDiscounts = 0;
            foreach ($order->carts as $cart) {
                $singlePurchasePrice += $cart->product->purchase_price * $cart->qty;
                $singleTotalEarning = $cart->product->selling_price * $cart->qty;
            }
            if($order->bill_type == "sale")
            {
                $totalEarning += $singleTotalEarning;
                $singleTotalProfit = $singleTotalEarning - ($order->discount + $singlePurchasePrice);
                $totalProfit +=$singleTotalProfit;
            }else
            {
                $totalEarning -= $singleTotalEarning;
                $singleTotalProfit = $order->discount;
                $totalProfit -=$singleTotalProfit;
            }
        }
        return view('admin.earning.viewEarning', compact('totalEarning', 'orders', 'totalProfit'));
    }

    public function searchEarning(Request $request)
    {
//        dd($request->toArray());
//        $orders = Order::get();
        $totalEarning = 0;
        $totalProfit = 0;
        $purchasePrice = 0;
        $totalDiscounts = 0;

        $from = $request->from_date;
        $fromDate = Carbon::parse($from);
        $from_date = $fromDate->format('Y-m-d H:i:s');

        $to = $request->to_date;
        $toDate = Carbon::parse($to);
        $to_date = $toDate->format('Y-m-d H:i:s');

        $orders = Order::whereBetween('created_at', array($from_date, $to_date))->get();

        foreach ($orders as $order) {
            $totalDiscounts += $order->discount;
            foreach ($order->carts as $cart) {
                $purchasePrice += $cart->product->purchase_price * $cart->qty;
                $totalEarning += $cart->product->selling_price * $cart->qty;
            }
        }
        $totalProfit += $totalEarning - $totalDiscounts - $purchasePrice;

        return view('admin.earning.viewEarning', compact('totalEarning', 'orders', 'totalProfit'));
    }

    public function index()
    {
        //
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
}
