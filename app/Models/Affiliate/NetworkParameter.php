<?php

namespace App\Models\Affiliate;

use Illuminate\Database\Eloquent\Model;

class NetworkParameter extends Model
{
    //
    protected $table = 'affiliate_network_parameters';

    public function affiliatenetworks(){
        return $this->hasMany('App\Models\Affiliate\Network');
    }
}
