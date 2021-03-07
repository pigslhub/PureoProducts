<?php

namespace App\Models;

use App\Models\General\Cart;
use App\Shop;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'icon', 'subcategory_id', 'price', 'description', 'volumes', 'in_stock',
    'instruction', 'ingredients'];

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
//
//    public function carts()
//    {
//        return $this->hasMany(Cart::class);
//    }
}
