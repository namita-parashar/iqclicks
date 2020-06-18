<?php

namespace App\Models\Brand;

use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    //
    protected $table='brand_models';

    public function brands(){
        return $this->hasMany('App\Models\Brand\Brand');
    }

}
