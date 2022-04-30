<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * Get products associated with the diet.
     */
    public function diets()
    {
        return $this->belongsToMany(Diet::class);
    }
}
