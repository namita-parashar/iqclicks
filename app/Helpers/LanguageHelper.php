<?php

namespace App\Helpers;

use App\Models\Languages;

class LanguageHelper{

    public static function create($data=[]){
        $language = new Languages;
        $language->name = $data['name'] ?? "";
        $language->save();
        return $language;
    }

    public static function update(Languages $language,$data=[]){
        $language->name = $data['name'] ?? $language->name;
        $language->save();
        return $language;
    }

    public static function delete(Languages $language){
        return $language->delete();
    }

}