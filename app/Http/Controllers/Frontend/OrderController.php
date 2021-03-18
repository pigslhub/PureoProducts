<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\General\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function allOngoingOrders()
    {
        return view('frontend.orders.allOngoingOrders');
    }

    public function allOngoingOrderCarts(Order $order)
    {
        return view('frontend.orders.singleOngoingOrderCarts', compact('order'));
    }

    public function allCompletedOrders()
    {
        return view('frontend.orders.allCompletedOrders');
    }

    public function allCompletedOrderCarts(Order $order)
    {
        return view('frontend.orders.singleCompletedOrderCarts', compact('order'));
    }
}
