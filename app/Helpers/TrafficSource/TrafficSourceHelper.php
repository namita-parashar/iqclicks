<?php 
namespace App\Helpers\TrafficSource;

use App\Models\TrafficSource\TrafficSource;
use App\Models\Location\Timezone;

class TrafficSourceHelper{

    public function create(Timezone $timezone,$data=[]){
        $traffic_source = new TrafficSource;
        $traffic_source->name = $data["name"] ?? "Untitled";
        $traffic_source->currency = $data["currency"] ?? "Untitled";
        $traffic_source->postback_url = $data["postback_url"] ?? "Untitled";
        $traffic_source->notes = $data["notes"] ?? "Untitled";
        $traffic_source->timezone_id = $timezone->id;
        $traffic_source->save();
        return $traffic_source;
    }

    public static function update(TrafficSource $traffic_source,Timezone $timezone , $data=[]){
        $traffic_source->name = $data["name"] ?? "Untitled";
        $traffic_source->currency = $data["currency"] ?? "Untitled";
        $traffic_source->postback_url = $data["postback_url"] ?? "Untitled";
        $traffic_source->notes = $data["notes"] ?? "Untitled";
        $traffic_source->timezone_id = $timezone->id;
        $traffic_source->save();
        return $traffic_source;
    }

    public static function delete(TrafficSource $traffic_source){
        return $traffic_source->delete();
    }
}