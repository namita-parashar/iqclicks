<?php

namespace App\Models\TrafficSource;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    //
    protected $table = 'traffic_source_accounts';
    public function integrations(){
        return $this->morphToMany('App\Models\Integration\Integration','applicable');
    }
    public function trackerCampaigns(){
        return $this->hasMany('App\Models\Tracker\Campaigns');
    }
}
