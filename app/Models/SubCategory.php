<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = ['name', 'icon', 'category_id'];

   public function category(){
       return $this->belongsTo(Category::class);
   }
    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
