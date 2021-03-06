<?php

namespace App;

use App\Models\General\Order;
use App\Models\Product;
use App\Models\ShopType;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Shop extends Authenticatable
{
    protected $fillable = [
        'name', 'owner_name', 'password', 'email', 'address', 'phone', 'zip_code',
        'description', 'shop_type_id', 'commission', 'status', 'icon', 'rating',
        'public_key', 'secret_key'
    ];
    public function shop_type()
    {
        return $this->belongsTo(ShopType::class);
    }
    public  function  orders()
    {
        return $this->hasMany(Order::class);
    }
}
