<?php

namespace App\Models\TrafficSource;

use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    //
    protected $table = 'traffic_source_parameters';

    public function trafficsources(){
        return $this->hasMany('App\Models\TrafficSource\TrafficSource');
    }
}
