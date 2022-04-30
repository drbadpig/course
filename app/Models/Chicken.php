<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chicken extends Model
{
    use HasFactory;

    /**
     * Get the breed associated with the chicken.
     */
    public function breed()
    {
        return $this->belongsTo(Breed::class);
    }

    /**
     * Get the worker associated with the chicken.
     */
    public function worker()
    {
        return $this->belongsTo(Worker::class);
    }

    /**
     * Get the cage associated with the chicken.
     */
    public function cage()
    {
        return $this->belongsTo(Cage::class);
    }
}
