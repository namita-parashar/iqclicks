<?php

namespace App\Models\Tracker;

use Illuminate\Database\Eloquent\Model;

class Flow extends Model
{
    //
    protected $table = 'tracker_flows';
    
    public function trackerCampaign(){
        return $this->belongsTo('App\Models\Tracker\Campaign');
    }
    public function trackerLanders(){
        return $this->hasMany('App\Models\Tracker\Lander');
    }
    public function workspaces(){
        return $this->hasMany('App\Models\Workspace\Workspace');
    }
    public function trackerRules()
    {
        return $this->morphMany('App\Models\Tracker\Rule', 'rulable');
    }
}
