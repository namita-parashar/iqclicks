<?php

namespace App\Helpers;

use App\Models\Device;

class DeviceHelper{

    public static function create($data=[]){
        $device = new Device;
        $device->name = $data['name'] ?? "";
        $device->save();
        return $device;
    }

    public static function update(Device $device , $data=[]){
        $device->name = $data['name'] ?? $device->name;
        $device->save();
        return $device;
    }

    public static function delete(Device $device){
        return $device->delete();
    }


}