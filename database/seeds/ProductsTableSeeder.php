<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $products = array(
            array(
                'name' => 'Picture Frame',
                'icon' => '',
                'price' => '150.00',
                'description' => 'Product Description',
                'in_stock' => 5,
                'product_code' => 'AB67F',
                'min_price' => '100',
            ),
        );
        foreach ($products as $product)
        {
            \App\Models\General\Product::create($product);
        }
    }
}
