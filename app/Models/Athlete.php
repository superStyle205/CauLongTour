<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Athlete extends Model
{

    use SoftDeletes;

    protected $fillable = ['name','age','gender','address','unit','note'];

    public function athleteFormTournaments()
    {
        return $this->hasMany('App\Models\AthleteFormTournament');
    }

    public function match_details()
    {
        return $this->hasMany('App\Models\MatchDetail');
    }
}
