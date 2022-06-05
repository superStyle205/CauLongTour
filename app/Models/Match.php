<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{

    public function match_details()
    {
        return $this->hasMany('App\Models\MatchDetail');
    }

    public function sub_matchs()
    {
        return $this->hasMany('App\Models\Match', 'match_parent_id');
    }

    public function round()
    {
        return $this->belongsTo('App\Models\Round');
    }

    public function form()
    {
        return $this->belongsTo('App\Models\Form');
    }
}
