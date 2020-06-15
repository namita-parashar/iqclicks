<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{
    //
    protected $table = 'languages';

    public function countryLangugaes(){
        return $this->belongsToMany('App\Models\Country\Country','country_language','language_id','country_id');
    }
}
