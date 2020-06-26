<?php 
namespace App\Helpers;

use App\Models\Referrer;

class ReferrerHelper{

    public static function create($data=[]){
        $referrer = new Referrer;
        $referrer->name = $data['name'] ?? "";
        $referrer->save();
        return $referrer;

    }

    public static function update(Referrer $referrer,$data=[]){
        $referrer->name = $data['name'] ?? $referrer->name;
        $referrer->save();
        return $referrer;
    }

    public static function delete(Referrer $referrer){
        return $referrer->delete();
    }
}