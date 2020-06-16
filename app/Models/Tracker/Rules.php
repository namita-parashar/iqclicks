<?php

namespace App\Models\Tracker;

use Illuminate\Database\Eloquent\Model;

class Rules extends Model
{
    //
    protected $table = 'tracker_rules';

    public function rulable(){
        return $this->morphTo();
    }
    public function trackerRuleCondition(){
        return $this->belongsTo('App\Models\Tracker\RuleConditions');
    }
    
    public function affiliateOffers(){
        return $this->morphedByMany('App\Models\Affiliate\Offers','linkable');
    }
    public function trackerLanders(){
        return $this->morphedByMany('App\Models\Tracker\Landers','linkable');
    }
    public function affiliateAccounts(){
        return $this->morphedByMany('App\Models\Affiliate\Accounts','linkable');
    }
    public function trackerLanderOffers(){
        return $this->morphedByMany('App\Models\Tracker\LanderOffer','linkable');
    }
   
}
