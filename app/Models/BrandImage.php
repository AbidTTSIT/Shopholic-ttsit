<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrandImage extends Model
{
    protected $fillable = [
        'brand_id',
        'path', // ✅ Add this line
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
