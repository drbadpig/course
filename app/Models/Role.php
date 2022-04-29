<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * Get the Role associated with the Worker.
     */
    public function workers()
    {
        return $this->hasMany(Worker::class);
    }
}
