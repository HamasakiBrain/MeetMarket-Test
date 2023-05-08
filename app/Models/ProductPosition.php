<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPosition extends Model
{
    protected $fillable = ['size', 'price', 'product_id'];
    public $timestamps = false;
    public function products()
    {
        return $this->hasMany(Product::class, 'id', 'product_id');
    }
}
