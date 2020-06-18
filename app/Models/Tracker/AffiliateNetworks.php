<?php

namespace App\Models\Tracker;

use Illuminate\Database\Eloquent\Model;

class AffiliateNetworks extends Model
{
    //
    protected $table = 'tracker_affiliate_networks';

    public function trackerOffer(){
        return $this->belongsTo('App\Models\Tracker\Offers');
    }
    public function affiliateAccount(){
        return $this->belongsTo('App\Models\Affiliate\Account');
    }
}
