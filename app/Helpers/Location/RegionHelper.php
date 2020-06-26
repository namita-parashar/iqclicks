<?php 

namespace App\Helpers\Location;

use App\Models\Location\Region;

class RegionHelper{

    public static function create($data=[]){
        $region = new Region;
        $region->name = $data['name'] ?? "";
        // $version->browsers()->save($browser);
        $region->save();
        return $region;
    }

    public static function update(Region $region,$data=[]){
        $region->name = $data['name'] ?? $region->name;
        $region->save();
        return $region;
    }

    public static function delete(Region $region){
       return $region->delete();
    }
}