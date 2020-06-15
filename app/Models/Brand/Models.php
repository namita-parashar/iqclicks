<?php

namespace App\Models\Brand;

use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    //
    protected $table='brand_models';

    public function brand(){
        return $this->belongsTo('App\Models\Brand\Brand');
    }

}
