<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //
    protected $table = 'languages';

    public function countries(){
        // return $this->belongsToMany('App\Models\Country\Country','country_language','language_id','country_id');
        return $this->belongsToMany('App\Models\Location\Country');
    }
    public function offers(){
        return $this->morphToMany('App\Models\Language','applicable');
    }
}
