<?php 
namespace App\Helpers\Tracker;

use App\Models\Tracker\Offer;
use App\Models\Location\Country;
use App\Models\Tracker\AffiliateNetwork;

class OfferHelper{
    
    public static function create(Country $country, AffiliateNetwork $tracker_affiliate_network,$data=[]){
        $tracker_offer = new Offers;
        $tracker_offer->name = $data['name'] ?? "";
        $tracker_offer->offer_url = $data['offer_ur;'] ?? "";
        $tracker_offer->country_id = $country->id;
        $tracker_offer->affiliate_network_id  = $tracker_affiliate_network->id;
        $tracker_offer->save();
        $tracker_offer->affiliateAccounts()->sync([$tracker_offer->id]);
        return $tracker_offer;
    }

    public static function update(Offer $tracker_offer, Country $country, AffiliateNetwork $tracker_affiliate_network,$data=[]){
        $tracker_offer->name = $data['name'] ?? "";
        $tracker_offer->offer_url = $data['offer_ur;'] ?? "";
        $tracker_offer->country_id = $country->id;
        $tracker_offer->affiliate_network_id  = $tracker_affiliate_network->id;
        $tracker_offer->save();
        return $tracker_offer;
    }

    public static function delete(Offer $tracker_offer){
        return $tracker_offer->delete();
    }
}