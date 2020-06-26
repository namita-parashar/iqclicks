<?php

namespace App\Models\Tracker;

use Illuminate\Database\Eloquent\Model;

class Lander extends Model
{
    //
    protected $table ='tracker_landers';

    public function workspaces(){
        return $this->morphToMany('App\Models\Workspace\Workspace','assetable');
    }
    public function trackerCampaign(){
        return $this->belongsTo('App\Models\Tracker\Campaign');
    }
    public function trackerFlow(){
        return $this->belongsTo('App\Models\Tracker\Flow');
    }
    public function countries(){
        return $this->hasMany('App\Models\Location\Country');
    }
    public function domains(){
        return $this->hasMany('App\Models\Domain\Domain');
    }
    public function affiliateOffers()
    {
        return $this->belongsToMany('App\Models\Affiliate\Offer','tracker_lander_offer','campaign_id','affiliate_offer_id');
    }
    public function trackerPaths(){
        return $this->morphToMany('App\Models\Tracker\Path','linkable');
    }
    
}
