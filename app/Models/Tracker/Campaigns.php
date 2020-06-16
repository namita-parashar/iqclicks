<?php

namespace App\Models\Tracker;

use Illuminate\Database\Eloquent\Model;

class Campaigns extends Model
{
    //
    protected $table = 'tracker_campaigns';
    
    public function domain(){
        return $this->belongsTo('App\Models\Domain\Domain');
    }
    public function trackerLander(){
        return $this->belongsTo('App\Models\Tracker\Landers');
    }
    public function trackerFlow(){
        return $this->belongsTo('App\Models\Tracker\Flows');
    }
    public function workspace(){
        return $this->belongsTo('App\Models\Workspace\Workspace');
    }
    public function trafficSource(){
        return $this->belongsTo('App\Models\TrafficSource\TrafficSource');
    }
    public function trafficSourceAccount(){
        return $this->belongsTo('App\Models\TrafficSource\Accounts');
    }
    public function trackerRules()
    {
        return $this->morphMany('App\Models\Tracker\Rules', 'rulable');
    }
    public function landerOffer(){
        return $this->hasMany('App\Models\Tracker\LanderOffer');
    }

}
