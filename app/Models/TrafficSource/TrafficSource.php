<?php

namespace App\Models\TrafficSource;

use Illuminate\Database\Eloquent\Model;

class TrafficSource extends Model
{
    //
    protected $table = 'traffic_sources';

    public function parameter(){
        return $this->belongsTo('App\Models\NetworkParameters');
    }
    public function trackerTrafficSource(){
        return $this->belongsTo('App\Models\Tracker\TrafficSources');
    }
    public function timezones(){
        return $this->hasMany('App\Models\Location\Timezone');
    }
    
}
