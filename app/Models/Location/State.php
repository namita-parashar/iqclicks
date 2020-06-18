<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //
    protected $table ='states';

    public function countries(){
        return $this->hasMany('App\Models\Location\Country');
    }

    public function city(){
        return $this->belongsTo('App\Models\Location\City');
    }

    public function offers(){
        return $this->morphToMany('App\Models\Location\State','applicable');
    }
}
