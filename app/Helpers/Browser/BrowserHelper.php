<?php 

namespace App\Helpers\Browser;

use App\Models\Browser\Browser;

class BrowserHelper{

    public static function create($data=[]){
        $browser = new Browser;
        $browser->name = $data['name'] ?? "";
        // $version->browsers()->save($browser);
        $browser->save();
        return $browser;
    }

    public static function update(Browser $browser,$data=[]){
        $browser->name = $data['name'] ?? $browser->name;
        $browser->save();
        return $browser;
    }

    public static function delete(Browser $browser){
       return $browser->delete();
    }
}