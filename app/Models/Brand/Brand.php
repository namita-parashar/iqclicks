<?php

namespace App\Models\Brand;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $table='brands';

    public function models(){
        return $this->hasMany('App\Models\Brand\Models');
    }
}
