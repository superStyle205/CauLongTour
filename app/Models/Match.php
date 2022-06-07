<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{

    public function match_details()
    {
        return $this->hasMany('App\Models\MatchDetail');
    }

    public function round()
    {
        return $this->belongsTo('App\Models\Round');
    }

    public function form()
    {
        return $this->belongsTo('App\Models\Form');
    }

    public function parent_match()
    {
        return $this->belongsTo('App\Models\Match', 'match_parent_id');
    }

    public function parent_match_recursive()
    {
        return $this->parent_match()->with('form', 'round', 'match_details', 'parent_match_recursive');
    }

    public function children_matchs()
    {
        return $this->hasMany('App\Models\Match', 'match_parent_id');
    }

    public function children_matchs_recursive()
    {
        return $this->children_matchs()->with('form', 'round', 'match_details', 'children_matchs_recursive');
    }
}
