<?php 
namespace App\Helpers\Tracker;

use App\Models\Tracker\AffiliateNetwork;
use App\Models\Tracker\AffiliateNetworkParameter;

class AffiliateNetworkParameterHelper{
    public static function create(AffiliateNetwork $tracker_affiliate_network,$data=[]){
        $tracker_affiliate_network_parameter = AffiliateNetworkParameter;
        $tracker_affiliate_network_parameter->network_id = $tracker_affiliate_network->id;
        $tracker_affiliate_network_parameter->aff_name = $data['name'] ?? "Untitled";
        $tracker_affiliate_network_parameter->aff_parameter = $data['parameter'] ?? "Untitled";
        $tracker_affiliate_network_parameter->aff_token = $data['aff_token'] ?? "Untitled";
        $tracker_affiliate_network_parameter->iq_token = $data['iq_token'] ?? "Untitled";
        $tracker_affiliate_network_parameter->save();
        return $tracker_affiliate_network_parameter;
    }

    public static function update(AffiliateNetworkParameter $tracker_affiliate_network_parameter,AffiliateNetwork $tracker_affiliate_network,$data=[]){
        $tracker_affiliate_network_parameter->network_id = $tracker_affiliate_network->id ?? $tracker_affiliate_network_parameter->network_id;
        $tracker_affiliate_network_parameter->aff_name = $data['name'] ?? $tracker_affiliate_network_parameter->aff_name;
        $tracker_affiliate_network_parameter->aff_parameter = $data['parameter'] ?? $tracker_affiliate_network_parameter->aff_parameter;
        $tracker_affiliate_network_parameter->aff_token = $data['aff_token'] ??  $tracker_affiliate_network_parameter->aff_token;
        $tracker_affiliate_network_parameter->iq_token = $data['iq_token'] ??  $tracker_affiliate_network_parameter->iq_token;
        $tracker_affiliate_network_parameter->save();
        return $tracker_affiliate_network_parameter;
    }

    public static function delete(AffiliateNetworkParameter $tracker_affiliate_network_parameter){
        return $tracker_affiliate_network_parameter->delete();
    }


}