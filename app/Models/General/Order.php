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
    protected $fillable = [
        'order_id', 'shop_id', 'customer_id', 'driver_id', 'description', 'amount', 'due_date','pickup_date','pickup_time',
        'due_time', 'status', 'purchased','checkout_session','checkout_session_status', 'order_type','has_cart','payment_type', 'shop_rating', 'driver_rating','zip_code'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
    public function conversation()
    {
        return $this->hasOne(Conversation::class);
    }
}
