<?php 
namespace App\Helpers\TrafficSource;

use App\Models\TrafficSource\TrafficSource;
use App\Models\TrafficSource\Parameters;
use App\Models\Location\Timezone;

class ParameterHelper{

    public static function create(TrafficSource $traffic_source,$data=[]){
        $parameters = new Parameters;
        $parameters->ts_name = $data['name'] ?? "Untitled";
        $parameters->ts_parameter = $data['parameter'] ?? "Untitled";
        $parameters->ts_token = $data['token'] ?? "Untitled";
        $parameters->traffic_source_id = $traffic_source->id;
        $parameters->save();
        return $parameters;
    }

    public static function update(Parameters $parameters,TrafficSource $traffic_source,$data=[]){
        $parameters->ts_name = $data['name'] ?? $parameters->ts_name;
        $parameters->ts_parameter = $data['parameter'] ?? $parameters->ts_name;
        $parameters->ts_token = $data['token'] ?? $parameters->ts_name;
        $parameters->traffic_source_id = $traffic_source->id ?? $parameters->traffic_source_id;
        $parameters->save();
        return $parameters;
    }

    public static function delete(Parameters $parameters){
        return $parameters->delete();
    }
}