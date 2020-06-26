<?php

namespace App\Models\Tracker;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    protected $table = 'tracker_offers';

    public function countries(){
        return $this->hasMany('App\Models\Location\Country');
    }
    public function trackerAffiliateNetworks(){
        return $this->hasMany('App\Models\Tracker\AffiliateNetwork');
    }
    public function affiliateAccounts()
    {
        return $this->belongsToMany('App\Models\Tracker\Lander','affiliate_account_offer_referer','affiliate_account_id','lander_id');
    }
    public function workspaces(){
        return $this->morphToMany('App\Models\Workspace\Workspace','assetable');
    }
}
