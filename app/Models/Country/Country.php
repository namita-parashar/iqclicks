<?php

namespace App\Models\Country;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    protected $table = 'countries';

    public function region(){
        return $this->hasMany('App\Models\Region');
    }

    public function states(){
        return $this->belongsTo('App\Models\States');
    }
}
