<?php

namespace App\Models\Workspace;

use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    //
    protected $table ='workspaces';

    public function affiliateNetworks(){
        return $this->morphedByMany('App\Models\Affiliate\Network','assetable');
    }
    public function affiliateAccounts(){
        return $this->morphedByMany('App\Models\Affiliate\Accounts','assetable');
    }
    public function trafficSources(){
        return $this->morphedByMany('App\Models\TrafficSource\TrafficSource','assetable');
    }
    public function domains(){
        return $this->morphedByMany('App\Models\Domain\Domain','assetable');
    }
    public function trackerLanders(){
        return $this->morphedByMany('App\Models\Tracker\Landers','assetable');
    }
    public function trackerOffers(){
        return $this->morphedByMany('App\Models\Tracker\Offers','assetable');
    }

    public function users(){
        return $this->morphedByMany('App\User','memberable');
    }
    public function teams(){
        return $this->morphedByMany('App\Teams','memberable');
    }
    public function trackerCampaigns(){
        return $this->hasMany('App\Models\Tracker\Campaigns');
    }
    public function agency(){
        return $this->belongsTo('App\Models\Agencies','agency_id');
    }

}
