<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{

    public function matchs()
    {
        return $this->hasMany('App\Models\Match');
    }
}
