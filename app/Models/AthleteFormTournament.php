<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AthleteFormTournament extends Model
{

    use SoftDeletes;

    public function tournaments()
    {
        return $this->belongsTo('App\Models\Tourname');
    }

    public function forms()
    {
        return $this->belongsTo('App\Models\Form');
    }

    public function athletes()
    {
        return $this->belongsTo('App\Models\Athlete');
    }

}
