<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{

    protected $fillable = ['round_name'];

    public function athletes()
    {
        return $this->belongsToMany('App\Models\Athlete');
    }

    public function forms()
    {
        return $this->belongsToMany('App\Models\Form');
    }
}
