<?php

namespace App\Models\Chat;

use App\Models\General\Order;
use Illuminate\Database\Eloquent\Model;
use App\Models\Chat\Chat;
use App\Models\Customer;
use App\Models\Driver;
use App\Models\Shop;

class Conversation extends Model
{
    protected $fillable = ['shop_id', 'customer_id', 'driver_id','order_id'];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
    public function chats()
    {
        return $this->hasMany(Chat::class);
    }

}
