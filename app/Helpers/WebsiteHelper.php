<?php

namespace App\Helpers;

use App\Models\Website\Website;

class WebsiteHelper{
    
    public static function create($data=[]){
        $website = new Website;
        $website->domain = $data['domain'] ?? "Untitled";
        $website->notes = $data['notes'] ?? "Untitled";
        $website->save();
        return $website;
    }

    public static function update(Website $website, $data=[]){
        $website->domain = $data['domain'] ?? $website->domain;
        $website->notes = $data['notes'] ?? $website->notes;
        $website->save();
        return $website;
    }

    public static function delete(Website $website){
        return $website->delete();
    }
}