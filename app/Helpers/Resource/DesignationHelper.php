<?php 
namespace App\Helpers\Resource;

use App\Models\Resource\Designation;
use App\Models\Agency;

class DesignationHelper{

    public static function create(Agency $agency,$data = []){
        $designation = new Designation;
        $designation->name = $data['name'] ?? "";
        $designation->description = $data['description'] ?? "";
        $designation->role = $data['role'] ?? "";
        $designation->agency_id = $agency->id;
        $designation->save();
        return $designation;
    }
    public static function update(Designation $designation,Agency $agency,$data = []){
        $designation->name = $data['name'] ?? $designation->name;
        $designation->description = $data['description'] ?? $designation->description;
        $designation->role = $data['role'] ?? $designation->role;
        $designation->agency_id = $agency->id ?? $designation->agency_id;
        $designation->save();
        return $designation;
    }

    public static function delete(Designation $designation){
        return $designation->delete();
    }
}