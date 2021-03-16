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
    protected $fillable = ['order_id', 'customer_id', 'amount', 'status', 'purchased', 'checkout_session','firstname','lastname','address1','address2','city','state','country','zipcode','postalcode','phone' ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
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
