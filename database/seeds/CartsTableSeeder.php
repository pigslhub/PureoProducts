<?php

use Illuminate\Database\Seeder;

class CartsTableSeeder extends Seeder
{
    public function run()
    {
        $carts = array(
            array(
                'order_id' => '1',
                'product_id' => '1',
                'qty' => '300',
                'price' => '500',
                'total' => '150000'
            ),
        );
        foreach ($carts as $cart)
        {
            App\Models\General\Cart::create($cart);
        }
    }
}
