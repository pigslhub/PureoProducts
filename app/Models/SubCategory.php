<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = ['name', 'icon', 'category_id'];

//    public function shop_type(){
//        return $this->belongsTo(ShopType::class);
//    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
