<?php 
namespace App\Helpers\Tracker;

use App\Models\Tracker\TrafficSource;
use App\Models\Tracker\TrafficSourceParameter;

class TrafficSourceParameterHelper{

    public static function create(TrafficSource $tracker_traffic_source,$data=[]){
        $traffic_source_parameter = new TrafficSourceParameter;
        $traffic_source_parameter->ts_name = $data['name'] ?? "Untitled";
        $traffic_source_parameter->ts_parameter = $data['parameter'] ?? "Untitled";
        $traffic_source_parameter->ts_token = $data['ts_token'] ?? "Untitled";
        $traffic_source_parameter->iq_token = $data['iq_token'] ?? "Untitled";
        $traffic_source_parameter->tracker_ts_id = $tracker_traffic_source->id;
        $traffic_source_parameter->save();
        return $traffic_source_parameter;
    }

    public static function update(TrafficSourceParameter $traffic_source_parameter , TrafficSource $tracker_traffic_source,$data=[]){
        $traffic_source_parameter->ts_name = $data['name'] ?? $traffic_source_parameter->ts_name;
        $traffic_source_parameter->ts_parameter = $data['parameter'] ?? $traffic_source_parameter->ts_parameter;
        $traffic_source_parameter->ts_token = $data['ts_token'] ?? $traffic_source_parameter->ts_token;
        $traffic_source_parameter->iq_token = $data['iq_token'] ?? $traffic_source_parameter->iq_token;
        $traffic_source_parameter->tracker_ts_id = $tracker_traffic_source->id ??  $traffic_source_parameter->tracker_ts_id ;
        $traffic_source_parameter->save();
        return $traffic_source_parameter;
    }

    public static function delete(TrafficSourceParameter $traffic_source_parameter ){
        return $traffic_source_parameter->delete();
    }



}