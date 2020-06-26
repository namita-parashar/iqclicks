<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'category';
    
    public function affiliateOffers(){
        return $this->belongsToMany('App\Models\Category\Offer');
    }
    public function websites(){
        return $this->morphToMany('App\Models\Website\Website','relatable');
    }
}
