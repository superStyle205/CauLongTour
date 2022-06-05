<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    protected $fillable = ['name','age','gender','address','unit','note'];

    public function tournaments()
    {
        return $this->belongsToMany('App\Models\Tournament');
    }

    public function match_details()
    {
        return $this->hasMany('App\Models\MatchDetail');
    }
}
