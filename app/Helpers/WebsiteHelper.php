<?php

namespace App\Helpers;

use App\Models\Website\Website;
use App\Models\Category\Category;
use App\Models\Affiliate\Account;

class WebsiteHelper{
    
    public static function create(Category $category=null,Account $account=null,$data=[]){
        $website = new Website;
        $website->domain = $data['domain'] ?? "Untitled";
        $website->notes = $data['notes'] ?? "Untitled";
        $website->save();
        $category->websites()->sync([$website->id]);
        $account->websites()->sync([$website->id]);
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