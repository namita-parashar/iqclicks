<?php

namespace App\Helpers;

use App\Models\Agency;

class AgencyHelper{
    
    public static function create($data=[]){
        $agency = new Agency;
        $agency->name = $data['name'] ?? "Untitled";
        $agency->field = $data['field'] ?? "Untitled";
        $agency->employees = $data['employees'] ?? "";
        $agency->description= $data['description']  ?? "";
        $agency->save();
        return $agency;
    }

    public static function update(Agency $agency, $data=[]){
        $agency->name = $data['name'] ?? $agency->name;
        $agency->field = $data['field'] ?? $agency->field;
        $agency->employees = $data['employees'] ?? $agency->employees;
        $agency->description= $data['description']  ?? $agency->description;
        $agency->save();
        return $agency;
    }

    public static function delete(Agency $agency){
        return $agency->delete();
    }
}