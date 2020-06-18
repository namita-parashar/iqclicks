<?php

namespace App\Models\Tracker;

use Illuminate\Database\Eloquent\Model;

class Flows extends Model
{
    //
    protected $table = 'tracker_flows';
    
    public function trackerCampaign(){
        return $this->belongsTo('App\Models\Tracker\Campaigns');
    }
    public function trackerLanders(){
        return $this->hasMany('App\Models\Tracker\Landers');
    }
    public function workspaces(){
        return $this->hasMany('App\Models\Workspace\Workspace');
    }
    public function trackerRules()
    {
        return $this->morphMany('App\Models\Tracker\Rules', 'rulable');
    }
}
