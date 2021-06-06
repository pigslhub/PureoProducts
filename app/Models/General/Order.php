<?php

namespace App\Models\General;

use App\Models\Chat\Conversation;
use App\Models\Customer;
use App\Models\Driver;
use App\Models\Product;
use App\Shop;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['amount', 'status', 'purchased'];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
