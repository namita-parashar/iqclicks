<?php

namespace App\Models\TrafficSource;

use Illuminate\Database\Eloquent\Model;

class TrafficSource extends Model
{
    //
    protected $table = 'traffic_sources';

    public function parameter(){
        return $this->belongsTo('App\Model\NetworkParameters');
    }
    public function trafficSourceAccount(){
        return $this->belongsTo('App\Models\TrafficSource\TrafficSource','tracker_traffic_source_id');
    }
    public function workspaces(){
        return $this->morphToMany('App\Models\Workspace\Workspace','assetable');
    }
    public function timezones(){
        return $this->hasMany('App\Models\Location\Timezone');
    }
    public function trackerCampaigns(){
        return $this->hasMany('App\Models\Tracker\Campaigns');
    }
}
