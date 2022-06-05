<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{

    protected $fillable = ['name','range_old'];

    public function matchs()
    {
        return $this->hasMany('App\Models\Match');
    }

    public function tournaments()
    {
        return $this->belongsToMany('App\Models\Tournament');
    }
}
