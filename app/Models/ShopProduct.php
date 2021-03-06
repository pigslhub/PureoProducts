<?php

namespace App\Models;

use App\Shop;
use Illuminate\Database\Eloquent\Model;

class ShopProduct extends Model
{
    protected $fillable=[ 'shop_id', 'category_id','product_id','price'];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
