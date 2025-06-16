<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Add this
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory; // Add this

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_role');
    }
}