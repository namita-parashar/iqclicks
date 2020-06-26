<?php

namespace App\Models\Tracker;

use Illuminate\Database\Eloquent\Model;

class AffiliateNetwork extends Model
{
    //
    protected $table = 'tracker_affiliate_networks';

    public function trackerOffer(){
        return $this->belongsTo('App\Models\Tracker\Offer');
    }
    public function affiliateAccount(){
        return $this->belongsTo('App\Models\Affiliate\Account');
    }
    public function workspaces(){
        return $this->morphToMany('App\Models\Workspace\Workspace','assetable');
    }
}
