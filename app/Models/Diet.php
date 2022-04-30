<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diet extends Model
{
    use HasFactory;

    /**
     * Get products associated with the diet.
     */
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
