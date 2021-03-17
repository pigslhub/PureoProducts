<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\General\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function allOrders()
    {
        return view('frontend.orders.allOrders');
    }

    public function allOrdersCart(Order $order)
    {
        return view('frontend.orders.singleOrder', compact('order'));
    }
}
