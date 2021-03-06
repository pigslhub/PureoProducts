<?php

namespace App\Models\General;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['order_id', 'product_id', 'qty', 'price', 'total', 'customer_id', 'purchased'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
