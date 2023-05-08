<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug'];

    public function parent()
    {
        return $this->belongsToMany(Category::class, 'category_parents', 'category_id', 'parent_id');
    }

    public function children()
    {
        return $this->belongsToMany(Category::class, 'category_parents', 'parent_id', 'category_id');
    }
}
