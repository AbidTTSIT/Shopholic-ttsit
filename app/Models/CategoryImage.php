<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryImage extends Model
{
    protected $fillable = ['category_id', 'path'];  // add 'path' here

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
