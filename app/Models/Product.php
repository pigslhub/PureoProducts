<?php

namespace App\Models;

use App\Models\General\Cart;
use App\Shop;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;

class Product extends Model
{
    protected $fillable = ['name', 'icon', 'subcategory_id', 'price', 'description', 'volumes', 'in_stock',
    'instruction', 'ingredients'];

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
    //
    //    public function carts()
    //    {
    //        return $this->hasMany(Cart::class);
    //    }


    public function getIconPath($size = 'sm')
    {
        $sizes = [
            'sm' => '100x75',
            'md' => '400x300',
            'lg' => '1000x750',
            'psm' => '50x100',
            'pmd' => '200x400',
            'plg' => '500x1000',
        ];
        if ($this->icon && file_exists('storage/' . $this->icon))
        return asset('storage/products/icons/' . $this->id . '-' . $sizes[$size] . '.jpg');
        else
        return asset('assets/images/noImg.jpg');
    }

    public function updateIcon()
    {
        if (request()->hasFile('icon')) {
            $dir = public_path('storage/products/icons/');
            if (!file_exists($dir)) mkdir($dir, 0777, true);
            $image = Image::make(request()->file('icon'));
            if ($image->width() > $image->height()) {
                $image->resize(100, 75)->save($dir . '/' . $this->id . '-100x75.jpg');
                $image->resize(400, 300)->save($dir . '/' . $this->id . '-400x300.jpg');
                $image->resize(1000, 775)->save($dir . '/' . $this->id . '-1000x775.jpg');
            } else {
                $image->resize(50, 100)->save($dir . '/' . $this->id . '-50x100.jpg');
                $image->resize(200, 400)->save($dir . '/' . $this->id . '-200x400.jpg');
                $image->resize(500, 1000)->save($dir . '/' . $this->id . '-500x1000.jpg');
            }
            $this->update(['icon' => "/products/icons/{$this->id}-100x75.jpg"]);
        }
    }
}
