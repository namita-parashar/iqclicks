<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    protected $table = 'cities';

    public function states(){
        return $this->hasMany('App\Models\Location\State');
    }
}
