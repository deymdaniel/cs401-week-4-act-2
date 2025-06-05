<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;




class Role extends Model
{
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_role');
    }

}