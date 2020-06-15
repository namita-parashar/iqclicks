<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //
    protected $table = 'regions';

    public function countries(){
        return $this->hasMany('App\Models\Country\Country');
    }

    public function country(){
        return $this->belongsTo('App\Models\Country\Country');
    }
}
