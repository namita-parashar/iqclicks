<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //
    protected $table = 'regions';
    
    public function country(){
        return $this->belongsTo('App\Models\Location\Country');
    }
}
