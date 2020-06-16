<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Timezone extends Model
{
    //
    protected $table='timezone';

    public function affiliateNetworks(){
        return $this->hasMany('App\Models\Affiliate\Network');
    }
    public function trafficSources(){
        return $this->hasMany('App\Models\Affiliate\Network');
    }
}
