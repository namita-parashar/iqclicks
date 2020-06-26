<?php 

namespace App\Helpers\Os;

use App\Models\Os\Os;

class OsHelper{

    public static function create($data=[]){
        $os = new Os;
        $os->name = $data['name'] ?? "";
        // $version->browsers()->save($browser);
        $os->save();
        return $os;
    }

    public static function update(Os $os,$data=[]){
        $os->name = $data['name'] ?? $os->name;
        $os->save();
        return $os;
    }

    public static function delete(Os $os){
       return $os->delete();
    }
}