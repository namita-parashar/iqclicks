<?php 

namespace App\Helpers\Brand;

use App\Models\Brand\Brand;
use App\Models\Brand\Models;

class ModelsHelper{

    public static function create(Brand $brand,$data=[]){
        $models = new Models;
        $models->name = $data['name'] ?? "";
        $models->brand_id = $brand->id ?? "";
        // $version->browsers()->save($browser);
        $models->save();
        return $models;
    }

    public static function update(Models $models,Brand $brand,$data=[]){
        $models->name = $data['name'] ?? $models->name;
        $models->brand_id = $brand->id ?? $models->brand_id ;
        $models->save();
        return $models;
    }

    public static function delete(Models $models){
       return $models->delete();
    }
}