<?php

namespace App\Models\Workspace;

use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    //
    protected $table ='workspaces';

    public function trackerAffiliateNetworks(){
        return $this->morphedByMany('App\Models\Tracker\NAffiliateNetwork','assetable');
    }
    public function affiliateAccounts(){
        return $this->morphedByMany('App\Models\Affiliate\Accounts','assetable');
    }
    public function trackerTrafficSources(){
        return $this->morphedByMany('App\Models\Tracker\TrafficSource','assetable');
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
        return $this->morphedByMany('App\Models\Resources\Teams','memberable');
    }
    public function trackerCampaign(){
        return $this->belongsTo('App\Models\Tracker\Campaigns');
    }
    public function agencies(){
        return $this->hasMany('App\Models\Agencies','agency_id');
    }
    public function trackerFlow(){
        return $this->belongsTo('App\Models\Tracker\Flows');
    }

}
