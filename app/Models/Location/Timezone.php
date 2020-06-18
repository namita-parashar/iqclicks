<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Model;

class Timezone extends Model
{
    //
    protected $table='timezone';

    public function affiliateNetwork(){
        return $this->belongsTo('App\Models\Affiliate\Network');
    }
    public function trafficSource(){
        return $this->belongsTo('App\Models\Traffic\TrafficSources');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
