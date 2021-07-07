<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // $this->call(ShopsTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
         $this->call(OrdersTableSeeder::class);
        // $this->call(DriversTableSeeder::class);
        // $this->call(CartsTableSeeder::class);
        //  $this->call(SubCategoriesTableSeeder::class);
        //  $this->call(CategoriesTableSeeder::class);
        //  $this->call(ProductsTableSeeder::class);
        // $this->call(ShopsTableSeeder::class);
    }
}
