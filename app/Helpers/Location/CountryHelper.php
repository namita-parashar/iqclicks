<?php 

namespace App\Helpers\Location;

use App\Models\Location\Region;
use App\Models\Location\Country;

class CountryHelper{

    public static function create(Region $region,$data=[]){
        $country = new Country;
        $country->name = $data['name'] ?? "";
        $country->region_id = $region->id ?? "";
        // $version->browsers()->save($browser);
        $country->save();
        return $country;
    }

    public static function update(Country $country,$data=[]){
        $country->name = $data['name'] ?? $country->name;
        $country->region_id = $region->id ?? $country->region_id;
        $country->save();
        return $country;
    }

    public static function delete(Country $country){
       return $country->delete();
    }
}