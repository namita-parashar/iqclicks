<?php

namespace App\Models\Affiliate;

use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    //
    protected $table = 'affiliate_networks';

    public function parameter(){
        return $this->belongsTo('App\Model\NetworkParameter');
    }
    public function offers(){
        return $this->morphToMany('App\Models\Affiliate\Offer','applicable');
    }
    public function timezones(){
        return $this->hasMany('App\Models\Location\Timezone');
    }
}
