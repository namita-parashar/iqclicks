<?php

namespace App\Models\TrafficSource;

use Illuminate\Database\Eloquent\Model;

class TrafficSource extends Model
{
    //
    protected $table = 'traffic_sources';

    public function parameters(){
        return $this->hasMany('App\Model\NetworkParameters');
    }
}
