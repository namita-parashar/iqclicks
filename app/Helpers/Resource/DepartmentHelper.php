<?php 
namespace App\Helpers\Resource;

use App\Models\Resource\Department;
use App\Models\Agency;

class DepartmentHelper{

    public static function create(Agency $agency,$data = []){
        $department = new Department;
        $department->name = $data['name'] ?? "";
        $department->description = $data['description'] ?? "";
        $department->agency_id = $agency->id;
        $department->save();
        return $department;
    }
    public static function update(Department $department,Agency $agency,$data = []){
        $department->name = $data['name'] ?? $department->name;
        $department->description = $data['description'] ?? $department->description;
        $department->agency_id = $agency->id ?? $department->agency_id;
        $department->save();
        return $department;
    }

    public static function delete(Department $department){
        return $department->delete();
    }
}