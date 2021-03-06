<?php

use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $subcategories = array(
            array(
                'name' => 'Argana Oil System',
                'icon' => '',
                'category_id' => '1',
            ),
        );
        foreach ($subcategories as $subcategory)
        {
            \App\Models\SubCategory::create($subcategory);
        }
    }
}
