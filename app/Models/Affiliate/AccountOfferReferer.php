<?php

namespace App\Models\Affiliate;

use Illuminate\Database\Eloquent\Model;

class AccountOfferReferer extends Model
{
    //
    protected $table = 'affiliate_account_offer_referer';

    public function trackerOffer(){
        return $this->belongsTo('App\Models\Tracker\Offers');
    }
    public function affiliateAccount(){
        return $this->belongsTo('App\Models\Affiliate\Accounts');
    }
    public function trackerLander(){
        return $this->belongsTo('App\Models\Tracker\Landers');
    }
}
