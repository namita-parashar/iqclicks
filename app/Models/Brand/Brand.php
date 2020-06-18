<?php

namespace App\Models\Brand;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $table='brands';

    public function model(){
        return $this->belongsTo('App\Models\Brand\Models');
    }
}
