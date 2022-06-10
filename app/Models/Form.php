<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Form extends Model
{

    use SoftDeletes;

    protected $fillable = ['name','range_old'];

    public function matchs()
    {
        return $this->hasMany('App\Models\Match');
    }

    public function athleteFormTournaments()
    {
        return $this->hasMany('App\Models\AthleteFormTournament');
    }

    public function formTournaments()
    {
        return $this->hasMany('App\Models\FormTournament');
    }

}
