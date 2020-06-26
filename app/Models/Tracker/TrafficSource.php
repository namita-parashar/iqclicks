<?php

namespace App\Models\Tracker;

use Illuminate\Database\Eloquent\Model;

class TrafficSource extends Model
{
    //
    protected $table = 'tracker_traffic_sources';

    public function trafficSourceAccount(){
      return $this->belongsTo('App\Models\TrafficSource\Account');
    }
    public function trafficSources(){
      return $this->hasMany('App\Models\TrafficSource\TrafficSource');
    }
    public function trackerCampaign(){
      return $this->belongsTo('App\Models\Tracker\Campaign');
    }
    public function workspaces(){
      return $this->morphToMany('App\Models\Workspace\Workspace','assetable');
    }
    public function trackerCampaigns(){
      return $this->hasMany('App\Models\Tracker\Campaign');
    }
}
