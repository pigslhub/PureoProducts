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
        foreach($orders as $order) {
            $profit = 0;
            $totalEarning += $order->amount - $order->discount;
//            foreach($order->carts as $cart) {
//                $purchasePrice += $cart->product->purchase_price;
//                $profit = $order->amount - $purchasePrice;
//            }
        }

        return view('admin.earning.viewEarning', compact('totalEarning', 'orders', 'purchasePrice'));
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
