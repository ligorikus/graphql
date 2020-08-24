<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    public $timestamps = false;

    /**
     * @return HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
