<?php
namespace App\Helpers\Affiliate;

use App\Models\Affiliate\Network;
use App\Models\Affiliate\NetworkParameter;

class NetworkParameterHelper{

    public static function create(Network $network,$data=[]){
        $network_parameters = new NetworkParameter;
        $network_parameters->aff_name = $data['name'] ?? "Untitled";
        $network_parameters->aff_parameter = $data['parameter'] ?? "Untitled";
        $network_parameters->aff_token = $data['token'] ?? "Untitled";
        $network_parameters->affiliate_network_id = $network->id;
        $network_parameters->save();
        return $network_parameters;
    }

    public static function update(NetworkParameter $network_parameters,Network $network,$data=[]){
        $network_parameters->aff_name = $data['name'] ?? $network_parameters->aff_name;
        $network_parameters->aff_parameter = $data['parameter'] ?? $network_parameters->aff_parameter;
        $network_parameters->aff_token = $data['token'] ?? $network_parameters->aff_token;
        $network_parameters->affiliate_network_id = $network->id ?? $network_parameters->affiliate_network_id;
        $network_parameters->save();
        return $network_parameters;
    }

    public static function delete(NetworkParameter $network_parameters){
        return $network_parameters->delete();
    }

}

