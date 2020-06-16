<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //
    protected $table ='states';

    public function countries(){
        return $this->hasMany('App\Models\Country\Country');
    }

    public function city(){
        return $this->belongsTo('App\Models\City');
    }

    public function offers(){
        return $this->morphToMany('App\Models\State','applicable');
    }
}
