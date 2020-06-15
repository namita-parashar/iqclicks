<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'category';
    
    public function categoryOffers(){
        return $this->hasMany('App\Model\Category\Offers');
    }
}
