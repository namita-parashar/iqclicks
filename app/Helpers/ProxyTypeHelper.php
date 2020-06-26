<?php

namespace App\Helpers;

use App\Models\ProxyType;

class ProxyTypeHelper{

    public static function create($data=[]){
        $proxy_type = new ProxyType;
        $proxy_type->name = $data['name'] ?? "";
        $proxy_type->save();
        return $proxy_type;
    }

    public static function update(ProxyType $proxy_type , $data=[]){
        $proxy_type->name = $data['name'] ?? $proxy_type->name;
        $proxy_type->save();
        return $proxy_type;
    }

    public static function delete(ProxyType $proxy_type){
        return $proxy_type->delete();
    }


}