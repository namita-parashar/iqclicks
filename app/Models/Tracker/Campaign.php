<?php

namespace App\Models\Tracker;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    //
    protected $table = 'tracker_campaigns';
    
    public function domain(){
        return $this->belongsTo('App\Models\Domain\Domain');
    }
    public function trackerLanders(){
        return $this->hasMany('App\Models\Tracker\Lander');
    }
    public function trackerFlows(){
        return $this->hasMany('App\Models\Tracker\Flow');
    }
    public function workspaces(){
        return $this->hasMany('App\Models\Workspace\Workspace');
    }
    public function trackerTrafficSources(){
        return $this->hasMany('App\Models\TrafficSource\TrafficSource');
    }
    public function trafficSourceAccounts(){
        return $this->hasMany('App\Models\TrafficSource\Account');
    }
    public function trackerRules()
    {
        return $this->morphMany('App\Models\Tracker\Rule', 'rulable');
    }

    public function landers()
    {
        return $this->belongsToMany('App\Models\Tracker\Lander','tracker_lander_offer','campaign_id','lander_id');
    }


}
