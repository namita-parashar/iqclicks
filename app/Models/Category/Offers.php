<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    //
    protected $table = 'category_offers';

    public function category(){
        return $this->belongsTo('App\Models\Category\Category');
    }
}
