<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cage extends Model
{
    use HasFactory;

    /**
     * Get the Department associated with the cage.
     */
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
