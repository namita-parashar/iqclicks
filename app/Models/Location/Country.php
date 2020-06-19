<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    protected $table = 'countries';

    public function regions(){
    return $this->hasMany('App\Models\Location\Region');
    }
    public function state(){
        return $this->belongsTo('App\Models\Location\States');
    }
    public function offers(){
        return $this->morphToMany('App\Models\Location\Country','applicable');
    }
    public function trackerOffer(){
        return $this->belongsTo('App\Models\Tracker\Offers');
    }
    public function trackerLander(){
        return $this->belongsTo('App\Models\Tracker\Landers','country_id');
    }
    public function languages(){
        return $this->belongsToMany('App\Models\Languages');
    }

}
