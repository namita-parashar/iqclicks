<?php

namespace App\Helpers;

use App\Models\Isp;

class IspHelper{

    public static function create($data=[]){
        $isp = new Isp;
        $isp->name = $data['name'] ?? "";
        $isp->save();
        return $isp;
    }

    public static function update(Isp $isp , $data=[]){
        $isp->name = $data['name'] ?? $isp->name;
        $isp->save();
        return $isp;
    }

    public static function delete(Isp $isp){
        return $isp->delete();
    }


}