<?php

namespace App\Models\Tracker;

use Illuminate\Database\Eloquent\Model;

class Flows extends Model
{
    //
    protected $table = 'tracker_flows';
    public function trackerCampaigns(){
        return $this->hasMany('App\Models\Tracker\Campaigns');
    }
    public function trackerRules()
    {
        return $this->morphMany('App\Models\Tracker\Rules', 'rulable');
    }
}
