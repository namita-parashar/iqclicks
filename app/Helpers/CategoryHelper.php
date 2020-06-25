<?php

namespace App\Helpers;

use App\Models\Category\Category;

class CategoryHelper{
    
    public static function create($data=[]){
        $category = new Category;
        $category->name = $data['name'] ?? "Untitled";
        $category->save();
        return $category;
    }

    public static function update(Category $category, $data=[]){
        $category->name = $data['name'] ?? $category->name;
        $category->save();
        return $category;
    }

    public static function delete(Category $category){
        return $category->delete();
    }
}