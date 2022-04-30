<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    /**
     * Get the User associated with the Worker.
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }

    /**
     * Get the Role associated with the Worker.
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Get chickens associated with the Worker.
     */
    public function chickens()
    {
        return $this->hasMany(Chicken::class);
    }
}
