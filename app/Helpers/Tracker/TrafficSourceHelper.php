<?php 
namespace App\Helpers\Tracker;

use App\Models\Agency;
use App\Models\Location\Timezone;
use App\Models\TrafficSource\TrafficSource;
use App\Models\Tracker\TrafficSource as TrackerTrafficSource;

class TrafficSourceHelper{

    public static function create(TrafficSource $traffic_source,Agency $agency,Timezone $timezone,$data=[]){
        $tracker_traffic_source = new TrackerTrafficSource;
        $tracker_traffic_source->name = $data['name'] ?? "Untitled";
        $tracker_traffic_source->currency = $data['currency'] ?? "Untitled";
        $tracker_traffic_source->postback_url = $data['postback_url'] ?? "Untitled";
        $tracker_traffic_source->notes = $data['notes'] ?? "Untitled";
        $tracker_traffic_source->agency_id = $agency->id;
        $tracker_traffic_source->timezone_id = $timezone->id;
        $tracker_traffic_source->traffic_source_id = $traffic_source->id;
        $tracker_traffic_source->save();
        return $tracker_traffic_source;

    }

    public static function update(TrackerTrafficSource $tracker_traffic_source,TrafficSource $traffic_source,Agency $agency,Timezone $timezone,$data=[]){
        $tracker_traffic_source->name = $data['name'] ?? $tracker_traffic_source->name;
        $tracker_traffic_source->currency = $data['currency'] ??  $tracker_traffic_source->currency;
        $tracker_traffic_source->postback_url = $data['postback_url'] ?? $tracker_traffic_source->postback_url;
        $tracker_traffic_source->notes = $data['notes'] ?? $tracker_traffic_source->notes;
        $tracker_traffic_source->agency_id = $agency->id ?? $tracker_traffic_source->agency_id;
        $tracker_traffic_source->timezone_id = $timezone->id ?? $tracker_traffic_source->timezone_id;
        $tracker_traffic_source->traffic_source_id = $traffic_source->id ?? $tracker_traffic_source->traffic_source_id;
        $tracker_traffic_source->save();
        return $tracker_traffic_source;
    }
    public function delete(TrackerTrafficSource $tracker_traffic_source){
        return $tracker_traffic_source->delete();
    }
}