<?php

namespace App\Models\Tracker;

use Illuminate\Database\Eloquent\Model;

class TrafficSources extends Model
{
    //
    protected $table = 'tracker_traffic_sources';

    public function trafficSourceAccount(){
      return $this->belongsTo('App\Models\TrafficSource\Accounts');
    }
    public function trackerCampaign(){
      return $this->belongsTo('App\Models\Tracker\Campaigns');
  }
}
