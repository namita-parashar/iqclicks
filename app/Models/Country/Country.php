<?php

namespace App\Models\Country;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    protected $table = 'countries';

    public function region(){
        return $this->hasMany('App\Models\Region');
    }

    public function states(){
        return $this->belongsTo('App\Models\States');
    }
    public function offers(){
        return $this->morphToMany('App\Models\Country\Country','applicable');
    }

    public function trackerOffers(){
        return $this->hasMany('App\Models\Tracker\Offers');
    }
    public function trackerLander(){
        return $this->belongsTo('App\Models\Tracker\Landers','country_id');
    }

}
