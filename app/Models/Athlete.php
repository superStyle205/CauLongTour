<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Athlete extends Model
{

    use SoftDeletes;

    protected $fillable = ['name','age','gender','address','unit','note'];

    public function tournaments()
    {
        return $this->belongsToMany('App\Models\Tournament');
    }

    public function forms()
    {
        return $this->belongsToMany('App\Models\Form');
    }

    public function match_details()
    {
        return $this->hasMany('App\Models\MatchDetail');
    }
}
