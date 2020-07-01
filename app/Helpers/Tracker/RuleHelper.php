<?php 
namespace App\Helpers\Tracker;

use App\Models\Tracker\Offer;
use App\Models\Tracker\Lander;
use App\Models\Tracker\Rule;
use App\Models\Affiliate\Account;
use App\Models\Tracker\LanderOffer;

class RuleHelper{
    
    public static function create(Offer $offer, Lander $lander,Account $account,LanderOffer $lander_offer,Rule $rule,$data=[]){
        $rule->affiliateOffers()->sync([$rule->id]);
        $rule->trackerLanders()->sync([$rule->id]);
        $rule->affiliateAccounts()->sync([$rule->id]);
        $rule->trackerLanderOffers()->sync([$rule->id]);
        return $rule;
    }

    public static function update(Offer $offer, Lander $lander,Account $account,LanderOffer $lander_offer,Rule $rule,$data=[]){
        $rule->affiliateOffers()->sync([$rule->id]);
        $rule->trackerLanders()->sync([$rule->id]);
        $rule->affiliateAccounts()->sync([$rule->id]);
        $rule->trackerLanderOffers()->sync([$rule->id]);
        return $rule;
    }

    public static function delete(Rule $rule){
        return $rule->delete();
    }
}