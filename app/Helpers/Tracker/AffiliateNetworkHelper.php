<?php 
namespace App\Helpers\Tracker;

use App\Models\Affiliate\Network;
use App\Models\Agencies;
use App\Models\Location\Timezone;
use App\Models\Tracker\AffiliateNetwork;

class AffiliateNetworkHelper{
    
    public static function create(Network $network,Agency $agency,Timezone $timezone , $data=[]){
        $tracker_affiliate_network = new AffiliateNetworks;
        $tracker_affiliate_network->name = $data['name'] ?? "Untitled";
        $tracker_affiliate_network->currency = $data['currency'] ?? "Untitled";
        $tracker_affiliate_network->postback_url = $data['postback_url'] ?? "Untitled";
        $tracker_affiliate_network->accept_duplicate_postback = $data['accept_duplicate_postback'] ?? "Untitled";
        $tracker_affiliate_network->append_clickid = $data['append_clickid'] ?? "Untitled";
        $tracker_affiliate_network->accept_postback_from_whitelist = $data['accept_postback_from_whitelist'] ?? "";
        $tracker_affiliate_network->notes = $data['notes'] ?? "Untitled";
        $tracker_affiliate_network->affiliate_network_id = $network->id;
        $tracker_affiliate_network->agency_id = $afency->id;
        $tracker_affiliate_network->timezone_id = $timezone->id;
        $tracker_affiliate_network->save();
        return $tracker_affiliate_network;
        
    }

    public static function update(AffiliateNetworks $tracker_affiliate_network,Network $network,Agency $agency,Timezone $timezone , $data=[]){
        $tracker_affiliate_network->name = $data['name'] ?? $tracker_affiliate_network->name;
        $tracker_affiliate_network->currency = $data['currency'] ?? $tracker_affiliate_network->currency;
        $tracker_affiliate_network->postback_url = $data['postback_url'] ?? $tracker_affiliate_network->postback_url;
        $tracker_affiliate_network->accept_duplicate_postback = $data['accept_duplicate_postback'] ?? $tracker_affiliate_network->accept_duplicate_postback;
        $tracker_affiliate_network->append_clickid = $data['append_clickid'] ?? $tracker_affiliate_network->append_clickid;
        $tracker_affiliate_network->accept_postback_from_whitelist = $data['accept_postback_from_whitelist'] ??$tracker_affiliate_network->accept_postback_from_whitelist;
        $tracker_affiliate_network->notes = $data['notes'] ?? $tracker_affiliate_network->notes;
        $tracker_affiliate_network->affiliate_network_id = $network->id ??$tracker_affiliate_network->affiliate_network_id;
        $tracker_affiliate_network->agency_id = $agency->id ?? $tracker_affiliate_network->agency_id;
        $tracker_affiliate_network->timezone_id = $timezone->id ?? $tracker_affiliate_network->timezone_id;
        $tracker_affiliate_network->save();
        return $tracker_affiliate_network;
    }

    public static function delete(AffiliateNetworks $tracker_affiliate_network){
        return $tracker_affiliate_network->delete();
    }
}