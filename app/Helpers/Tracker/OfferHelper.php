<?php 
namespace App\Helpers\Tracker;

use App\Models\Tracker\Offers;
use App\Models\Location\Countries;
use App\Models\Tracker\AffiliateNetwork;

class OfferHelper{
    
    public static function create(Countries $country, AffiliateNetwork $tracker_affiliate_network,$data=[]){
        $tracker_offer = new Offers;
        $tracker_offer->name = $data['name'] ?? "";
        $tracker_offer->offer_url = $data['offer_ur;'] ?? "";
        $tracker_offer->country_id = $country->id;
        $tracker_offer->affiliate_network_id  = $tracker_affiliate_network->id;
        $tracker_offer->save();
        return $tracker_offer;
    }

    public static function update(Offers $tracker_offer, Countries $country, AffiliateNetwork $tracker_affiliate_network,$data=[]){
        $tracker_offer->name = $data['name'] ?? "";
        $tracker_offer->offer_url = $data['offer_ur;'] ?? "";
        $tracker_offer->country_id = $country->id;
        $tracker_offer->affiliate_network_id  = $tracker_affiliate_network->id;
        $tracker_offer->save();
        return $tracker_offer;
    }

    public static function delete(Offers $tracker_offer){
        return $tracker_offer->delete();
    }
}