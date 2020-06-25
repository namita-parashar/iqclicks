<?php 
namespace App\Helpers\Tracker;

use App\Models\Tracker\AffiliateNetworks;
use App\Models\Tracker\AffiliateNetworkParameters;

class AffiliateNetworkParameterHelper{
    public static function create(AffiliateNetworks $tracker_affiliate_network,$data=[]){
        $tracker_affiliate_network_parameter = AffiliateNetworkParameters;
        $tracker_affiliate_network_parameter->network_id = $tracker_affiliate_network->id;
        $tracker_affiliate_network_parameter->aff_name = $data['name'] ?? "Untitled";
        $tracker_affiliate_network_parameter->aff_parameter = $data['parameter'] ?? "Untitled";
        $tracker_affiliate_network_parameter->aff_token = $data['aff_token'] ?? "Untitled";
        $tracker_affiliate_network_parameter->iq_token = $data['iq_token'] ?? "Untitled";
        $tracker_affiliate_network_parameter->save();
        return $tracker_affiliate_network_parameter;
    }

    public static function update(AffiliateNetworkParameters $tracker_affiliate_network_parameter,AffiliateNetworks $tracker_affiliate_network,$data=[]){
        $tracker_affiliate_network_parameter->network_id = $tracker_affiliate_network->id ?? $tracker_affiliate_network_parameter->network_id;
        $tracker_affiliate_network_parameter->aff_name = $data['name'] ?? $tracker_affiliate_network_parameter->aff_name;
        $tracker_affiliate_network_parameter->aff_parameter = $data['parameter'] ?? $tracker_affiliate_network_parameter->aff_parameter;
        $tracker_affiliate_network_parameter->aff_token = $data['aff_token'] ??  $tracker_affiliate_network_parameter->aff_token;
        $tracker_affiliate_network_parameter->iq_token = $data['iq_token'] ??  $tracker_affiliate_network_parameter->iq_token;
        $tracker_affiliate_network_parameter->save();
        return $tracker_affiliate_network_parameter;
    }

    public static function delete(AffiliateNetworkParameters $tracker_affiliate_network_parameter){
        return $tracker_affiliate_network_parameter->delete();
    }


}