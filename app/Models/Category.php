<?php

namespace App\Models;

use App\Shop;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = ['name', 'icon'];

//    public function shop()
//    {
//        return $this->hasMany(Shop::class);
//    }
//
    public function subcategories()
    {
        return $this->hasMany(SubCategory::class);
    }
}
