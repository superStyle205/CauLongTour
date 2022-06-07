<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MatchDetail extends Model
{

    public function match()
    {
        return $this->belongsTo('App\Models\Match');
    }

    public function athlete()
    {
        return $this->belongsTo('App\Models\Athlete');
    }
}
