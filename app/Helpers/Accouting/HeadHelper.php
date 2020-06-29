<?php 
namespace App\Helpers\Accounting;

use App\Models\Agency;
use App\Models\Accounting\Head;

class HeadHelper{

    public static function create(Agency $agency,$data=[]){
        $head = new Head;
        $head->name = $data['name'] ?? "";
        $head->description = $data['description'] ?? "";
        $head->agency_id = $agency->id;
        $head->save();
        return $head;
    }
    public static function update(Head $head,Agency $agency,$data=[]){
        $head->name = $data['name'] ?? $head->name ;
        $head->description = $data['description'] ?? $head->description;
        $head->agency_id = $agency->id;
        $head->save();
        return $head;
    }
    public static function delete(Head $head){
        return $head->delete();
    }

}