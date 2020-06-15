<?php

namespace App\Models\TrafficSource;

use Illuminate\Database\Eloquent\Model;

class Parameters extends Model
{
    //
    protected $table = 'traffic_source_parameters';

    public function trafficsource(){
        return $this->belongsTo('App\Models\TrafficSource\TrafficSource');
    }
}
