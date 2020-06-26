<?php 

namespace App\Helpers\Browser;

use App\Models\Os\Os;
use App\Models\Os\Version;

class VersionHelper{
    public static function create(Os $os,$data=[]){
        $version = new Version;
        $version->os_id = $data['os_id'] ??"";
        $version->name = $data['name'] ?? "";
        $version->save();
        return $version;
    }

    public static function update(Version $version,Os $os,$data=[]){
        $version->os_id = $data['os_id'] ??$version->os_id;
        $version->name = $data['name'] ?? $version->name;
        $version->save();
        return $version;
    }

    public static function delete(Version $version){
        $version->delete();
    }
}