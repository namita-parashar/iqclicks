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
    public function trackerCampaign(){
        return $this->belongsTo('App\Models\Tracker\Campaigns');
    }
    public function trackerTrafficSources(){
        return $this->hasMany('App\Models\Tracker\TrafficSource');
    }
    public function agencies(){
        return $this->hasMany('App\Models\Agencies');
    }
    public function paymentProfiles(){
        return $this->hasMany('App\Models\Accounting\PaymentProfile');
    }
}
