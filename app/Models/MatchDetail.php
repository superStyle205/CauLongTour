<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MatchDetail extends Model
{

    use SoftDeletes;

    public function match()
    {
        return $this->belongsTo('App\Models\Match');
    }

    public function athlete()
    {
        return $this->belongsTo('App\Models\Athlete');
    }
}
