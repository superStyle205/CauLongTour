<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AthleteFormTournament extends Model
{

    use SoftDeletes;

    public function tournament()
    {
        return $this->belongsTo('App\Models\Tournament');
    }

    public function form()
    {
        return $this->belongsTo('App\Models\Form');
    }

    public function athlete()
    {
        return $this->belongsTo('App\Models\Athlete');
    }

}
