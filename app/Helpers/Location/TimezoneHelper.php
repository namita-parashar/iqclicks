<?php 

namespace App\Helpers\Location;

use App\Models\Location\Timezone;

class TimezoneHelper{

    public static function read(){
        $timezone = Timezone::get();
        return $timezone;
    }
    public static function create($data=[]){
        $timezone = new Timezone;
        $timezone->timezone = $data['timezone'] ?? "";
        $timezone->lat_long = $data['lat_long'] ?? "";
        // $version->browsers()->save($browser);
        $timezone->save();
        return $timezone;
    }

    public static function update(Timezone $timezone,$data=[]){
        $timezone->name = $data['timezone'] ?? $timezone->timezone;
        $timezone->lat_long = $data['lat_long'] ?? $timezone->lat_long;
        $timezone->save();
        return $timezone;
    }

    public static function delete(Timezone $timezone){
       return $timezone->delete();
    }
}