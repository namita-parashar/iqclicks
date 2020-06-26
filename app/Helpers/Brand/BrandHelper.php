<?php 

namespace App\Helpers\Brand;

use App\Models\Brand\Brand;

class BrandHelper{

    public static function create($data=[]){
        $brand = new Brand;
        $brand->name = $data['name'] ?? "";
        // $version->browsers()->save($browser);
        $brand->save();
        return $brand;
    }

    public static function update(Brand $brand,$data=[]){
        $brand->name = $data['name'] ?? $brand->name;
        $brand->save();
        return $brand;
    }

    public static function delete(Brand $browser){
       return $brand->delete();
    }
}