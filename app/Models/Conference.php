<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    public function divisions()
    {
        return $this->hasMany(Division::class);
    }

    public function cities()
    {
        return $this->hasManyThrough(City::class, Division::class);
    }
}
