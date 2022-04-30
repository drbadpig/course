<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    use HasFactory;

    /**
     * Get the diet associated with the breed.
     */
    public function diet()
    {
        return $this->belongsTo(Diet::class);
    }
}
