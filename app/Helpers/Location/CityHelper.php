<?php 

namespace App\Helpers\Location;

use App\Models\Location\State;
use App\Models\Location\City;

class CityHelper{

    public static function create(State $state,$data=[]){
        $city = new City;
        $city->name = $data['name'] ?? "";
        $city->state_id = $state->id ?? "";
        // $version->browsers()->save($browser);
        $city->save();
        return $city;
    }

    public static function update(City $city,State $state,$data=[]){
        $city->name = $data['name'] ?? $city->name;
        $city->state_id = $state->id ?? $city->state_id;
        $city->save();
        return $city;
    }

    public static function delete(City $city){
       return $city->delete();
    }
}