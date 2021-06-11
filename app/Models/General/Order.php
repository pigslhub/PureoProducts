<?php

namespace App\Models\General;

use App\Models\General\Product;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['amount', 'status', 'purchased', 'discount'];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
