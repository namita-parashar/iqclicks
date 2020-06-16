<?php

namespace App\Models\Tracker;

use Illuminate\Database\Eloquent\Model;

class LanderOffer extends Model
{
    //
    protected $table = 'tracker_lander_offer';
    
    public function trackerCampaigns(){
        return $this->belongsTo('App\Models\Tracker\Campaigns');
    }
    public function trackerLander(){
        return $this->belongsTo('App\Models\Tracker\Landers');
    }
    public function trackerPaths(){
        return $this->morphToMany('App\Models\Tracker\Path','linkable');
    }
}
