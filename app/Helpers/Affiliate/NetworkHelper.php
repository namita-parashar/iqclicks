<?php 
namespace App\Helpers\Affiliate;

use App\Models\Affiliate\Network;
use App\Models\Location\Timezone;

class NetworkHelper{

    public static function create(Timezone $timezone , $data=[]){
        $affiliate_network = new Network;
        $affiliate_network->name = $data["name"] ?? "Untitled";
        $affiliate_network->currency = $data["currency"] ?? "Untitled";
        $affiliate_network->postback_url = $data["postback_url"] ?? "Untitled";
        $affiliate_network->notes = $data["notes"] ?? "Untitled";
        $affiliate_network->timezone_id = $timezone->id;
        $affiliate_network->save();
        return $affiliate_network;
    }

    public static function update(Network $affiliate_network,Timezone $timezone , $data=[]){
        $affiliate_network->name = $data["name"] ?? $affiliate_network->name;
        $affiliate_network->currency = $data["currency"] ?? $affiliate_network->currency;
        $affiliate_network->postback_url = $data["postback_url"] ?? $affiliate_network->postback_url;
        $affiliate_network->notes = $data["notes"] ?? $affiliate_network->notes;
        $affiliate_network->timezone_id = $timezone->id ?? $affiliate_network->timezone_id;
        $affiliate_network->save();
        return $affiliate_network;
    }

    public static function delete(Network $affiliate_network){
        return $affiliate_network->delete();
    }
}