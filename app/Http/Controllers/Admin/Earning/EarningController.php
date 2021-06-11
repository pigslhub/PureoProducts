<?php

namespace App\Http\Controllers\Admin\Earning;

use App\Http\Controllers\Controller;
use App\Models\General\Cart;
use App\Models\General\Order;
use Illuminate\Http\Request;

class EarningController extends Controller
{
    public function viewTotalEarning()
    {
        $orders = Order::get();
        $totalEarning = 0;
        $purchasePrice = 0;
        $totalProfit = 0;
        $totalDiscounts = 0;
        foreach($orders as $order) {
            $totalDiscounts +=  $order->discount;
            foreach($order->carts as $cart) {
                $purchasePrice += $cart->product->purchase_price * $cart->qty;
                $totalEarning += $cart->product->selling_price * $cart->qty;
            }
        }
        $totalProfit += $totalEarning - $totalDiscounts - $purchasePrice;
        return view('admin.earning.viewEarning', compact('totalEarning', 'orders','totalProfit'));
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
