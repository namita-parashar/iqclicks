<?php

namespace App\Models\Workspace;

use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    //
    protected $table ='workspaces';

    public function trackerAffiliateNetworks(){
        return $this->morphedByMany('App\Models\Tracker\AffiliateNetwork','assetable');
    }
    public function affiliateAccounts(){
        return $this->morphedByMany('App\Models\Affiliate\Account','assetable');
    }
    public function trackerTrafficSources(){
        return $this->morphedByMany('App\Models\Tracker\TrafficSource','assetable');
    }
    public function domains(){
        return $this->morphedByMany('App\Models\Domain\Domain','assetable');
    }
    public function trackerLanders(){
        return $this->morphedByMany('App\Models\Tracker\Lander','assetable');
    }
    public function trackerOffers(){
        return $this->morphedByMany('App\Models\Tracker\Offer','assetable');
    }

    public function users(){
        return $this->morphedByMany('App\User','memberable');
    }
    public function teams(){
        return $this->morphedByMany('App\Models\Resource\Team','memberable');
    }
    public function trackerCampaign(){
        return $this->belongsTo('App\Models\Tracker\Campaign');
    }
    public function agencies(){
        return $this->hasMany('App\Models\Agency','agency_id');
    }
    public function trackerFlow(){
        return $this->belongsTo('App\Models\Tracker\Flow');
    }

}
