<?php 
namespace App\Helpers;

use App\Models\Workspace;
use App\Models\Agency;

class WorkspaceHelper{

    public static function create(Agency $agency,$data = []){
        $workspace = new Workspace;
        $workspace->name = $data['name'] ?? "";
        $workspace->description = $data['description'] ?? "";
        $workspace->agency_id = $agency->id;
        $workspace->save();
        return $workspace;
    }
    public static function update(Workspace $workspace,Agency $agency,$data = []){
        $workspace->name = $data['name'] ?? $workspace->name;
        $workspace->description = $data['description'] ?? $workspace->description;
        $workspace->agency_id = $agency->id ?? $workspace->agency_id;
        $workspace->save();
        return $workspace;
    }

    public static function delete(Workspace $workspace){
        return $workspace->delete();
    }
}