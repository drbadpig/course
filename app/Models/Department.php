<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    /**
     * Get the Cages associated with the Department.
     */
    public function cages()
    {
        return $this->hasMany(Cage::class);
    }
}
