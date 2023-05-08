<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'slug', 'sku','brand_id'];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'id', 'product_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function positions()
    {
        return $this->belongsTo(ProductPosition::class, 'id', 'product_id');
    }

    public function productCategories()
    {
        return $this->hasMany(ProductCategory::class, 'product_id', 'id');
    }

}
