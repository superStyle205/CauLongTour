<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tournament extends Model
{

    use SoftDeletes;

    protected $fillable = ['name'];

    public function athletes()
    {
        return $this->belongsToMany('App\Models\Athlete');
    }

    public function forms()
    {
        return $this->belongsToMany('App\Models\Form');
    }
}
