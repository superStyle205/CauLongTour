<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Round extends Model
{

    use SoftDeletes;

    public function matchs()
    {
        return $this->hasMany('App\Models\Match');
    }
}
