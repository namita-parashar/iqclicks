<?php

namespace App\Models\Tracker;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    //
    protected $table = 'tracker_rules';

    public function rulable(){
        return $this->morphTo();
    }
    public function trackerRuleCondition(){
        return $this->belongsTo('App\Models\Tracker\RuleCondition');
    }
    
    public function affiliateOffers(){
        return $this->morphedByMany('App\Models\Affiliate\Offer','linkable');
    }
    public function trackerLanders(){
        return $this->morphedByMany('App\Models\Tracker\Lander','linkable');
    }
    public function affiliateAccounts(){
        return $this->morphedByMany('App\Models\Affiliate\Account','linkable');
    }
    public function trackerLanderOffers(){
        return $this->morphedByMany('App\Models\Tracker\LanderOffer','linkable');
    }
   
}
