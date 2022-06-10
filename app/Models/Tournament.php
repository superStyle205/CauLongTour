<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tournament extends Model
{

    use SoftDeletes;

    protected $fillable = ['name'];

    public function athleteFormTournaments()
    {
        return $this->hasMany('App\Models\AthleteFormTournament');
    }

    public function formTournaments()
    {
        return $this->hasMany('App\Models\FormTournament');
    }
}
