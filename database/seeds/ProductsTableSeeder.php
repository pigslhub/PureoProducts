<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $products = array(
            array(
                'name' => 'Argana Shampoo',
                'icon' => '',
                'sub_category_id' => '1',
                'price' => '150.00',
                'description' => 'Product Description',
                'volumes' => '8oz',
                'in_stock' => 5,
                'instruction' => 'Product Instructions',
                'ingredients' => 'Product Ingredients',
            ),
        );
        foreach ($products as $product)
        {
            \App\Models\Product::create($product);
        }
    }
}
