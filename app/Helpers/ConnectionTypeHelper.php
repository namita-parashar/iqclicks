<?php

namespace App\Helpers;

use App\Models\ConnectionType;

class ConnectionTypeHelper{

    public static function create($data=[]){
        $connection_type = new ConnectionType;
        $connection_type->name = $data['name'] ?? "";
        $connection_type->save();
        return $connection_type;
    }

    public static function update(ConnectionType $connection_type , $data=[]){
        $connection_type->name = $data['name'] ?? $connection_type->name;
        $connection_type->save();
        return $connection_type;
    }

    public static function delete(ConnectionType $connection_type){
        return $connection_type->delete();
    }


}