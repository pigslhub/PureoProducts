<?php

use App\Shop;
use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    public function run()
    {
        $password = \Illuminate\Support\Facades\Hash::make('password');
        $shops = array(
            array(
                'name' => 'ABC',
                'owner_name' => 'Muhammad Imran',
                'password' => $password,
                'email' => 'imran@gmail.com',
                'address' => 'xyz',
                'phone' => '123',
                'zip_code' => '52250',
                'description' => 'dummy',
                'shop_type_id' => 1,
                'commission' => 5.0,
                'status' => 1,
                'icon' => '',
                'rating' => '4',
                'public_key' => '',
                'secret_key'  => ''
            ),
        );
        foreach ($shops as $shop)
        {
            \App\Shop::create($shop);
        }
    }
}
