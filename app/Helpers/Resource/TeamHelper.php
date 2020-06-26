<?php 
namespace App\Helpers\Resource;

use App\Models\Resource\Team;
use App\Models\Agency;

class TeamHelper{

    public static function create(Agency $agency,$data = []){
        $team = new Team;
        $team->name = $data['name'] ?? "";
        $team->description = $data['description'] ?? "";
        $team->agency_id = $agency->id;
        $team->save();
        return $team;
    }
    public static function update(Team $team,Agency $agency,$data = []){
        $team->name = $data['name'] ?? $team->name;
        $team->description = $data['description'] ?? $team->description;
        $team->agency_id = $agency->id ?? $team->agency_id;
        $team->save();
        return $team;
    }

    public static function delete(Team $team){
        return $team->delete();
    }
}