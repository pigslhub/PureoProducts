<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = ['name', 'icon', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function getIconPath($size = 'sm')
    {
        $sizes = [
            'sm' => '100x75',
            'md' => '400x300',
            'lg' => '1000x750',
            'psm' => '50x75',
            'pmd' => '200x300',
            'plg' => '500x750',
            'esm' => '100x100',
            'emd' => '300x300',
            'elg' => '750x750',
        ];
        if ($this->icon && file_exists('storage/' . $this->icon))
            return asset('storage/subcategories/icons/' . $this->id . '-' . $sizes[$size] . '.png');
        else
            return asset('assets/images/noImg.jpg');
    }

    public function updateIcon()
    {
        if (request()->hasFile('icon')) {
            $dir = public_path('storage/subcategories/icons/');
            if (!file_exists($dir)) mkdir($dir, 0777, true);
            $image = Image::make(request()->file('icon'));
            if ($image->width() > $image->height()) {
                Image::make(request()->file('icon'))->resize(100, 75)->save($dir . '/' . $this->id . '-100x75.png');
                Image::make(request()->file('icon'))->resize(400, 300)->save($dir . '/' . $this->id . '-400x300.png');
                Image::make(request()->file('icon'))->resize(1000, 775)->save($dir . '/' . $this->id . '-1000x750.png');
                $this->update(['icon' => "/subcategories/icons/{$this->id}-100x75.png"]);
            } else if ($image->width() == $image->height()) {
                Image::make(request()->file('icon'))->resize(100, 100)->save($dir . '/' . $this->id . '-100x100.png');
                Image::make(request()->file('icon'))->resize(300, 300)->save($dir . '/' . $this->id . '-300x300.png');
                Image::make(request()->file('icon'))->resize(750, 750)->save($dir . '/' . $this->id . '-750x750.png');
                $this->update(['icon' => "/subcategories/icons/{$this->id}-100x100.png"]);
            } else {
                Image::make(request()->file('icon'))->resize(50, 100)->save($dir . '/' . $this->id . '-50x75.png');
                Image::make(request()->file('icon'))->resize(200, 400)->save($dir . '/' . $this->id . '-200x300.png');
                Image::make(request()->file('icon'))->resize(500, 1000)->save($dir . '/' . $this->id . '-500x750.png');
                $this->update(['icon' => "/subcategories/icons/{$this->id}-50x75.png"]);
            }

        }
    }

}
