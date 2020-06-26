<?php 

namespace App\Helpers\Browser;

use App\Models\Browser\Browser;
use App\Models\Browser\Version;

class VersionHelper{
    public static function create(Browser $browser,$data=[]){
        $version = new Version;
        $version->browser_id = $data['browser_id'] ??"";
        $version->name = $data['name'] ?? "";
        $version->save();
        return $version;
    }

    public static function update(Version $version,Browser $browser,$data=[]){
        $version->browser_id = $data['browser_id'] ??$version->browser_id;
        $version->name = $data['name'] ?? $version->name;
        $version->save();
        return $version;
    }

    public static function delete(Version $version){
        return $version->delete();
    }
}