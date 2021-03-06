<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $categories = array(
            array(
                'name' => 'Hair Solution',
                'icon' => '',
            ),
        );
        foreach ($categories as $category)
        {
            \App\Models\Category::create($category);
        }
    }
}
