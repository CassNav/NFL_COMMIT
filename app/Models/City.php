<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function conference()
    {
        return $this->belongsTo(Conference::class);
    }
}
