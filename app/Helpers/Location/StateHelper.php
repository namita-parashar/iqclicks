<?php 

namespace App\Helpers\Location;

use App\Models\Location\State;
use App\Models\Location\Country;

class StateHelper{

    public static function create(Country $country,$data=[]){
        $state = new State;
        $state->name = $data['name'] ?? "";
        $state->country_id = $country->id ?? "";
        // $version->browsers()->save($browser);
        $state->save();
        return $state;
    }

    public static function update(State $state,Country $country,$data=[]){
        $state->name = $data['name'] ?? $state->name;
        $state->country_id = $country->id ?? $state->country_id;
        $state->save();
        return $state;
    }

    public static function delete(State $state){
       return $state->delete();
    }
}