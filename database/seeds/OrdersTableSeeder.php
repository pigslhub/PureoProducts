<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    public function run()
    {
        $orders = array(
            array(
                'order_id' => 'ABC123',
                'shop_id' => 1,
                'customer_id' => 1,
                'driver_id' => 1,
                'description' => 'dummy',
                'amount' => 0,
                'due_date' => '12-12-2019',
                'due_time' => '03:57',
                'status' => 1,
                'order_type' => '',
                'shop_rating' => '3',
                'driver_rating' => '4',
            ),
        );
        foreach ($orders as $order)
        {
            App\Models\General\Order::create($order);
        }
    }
}
