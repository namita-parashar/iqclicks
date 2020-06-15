<?php

namespace App\Models\Affiliate;

use Illuminate\Database\Eloquent\Model;

class NetworkParameters extends Model
{
    //
    protected $table = 'affiliate_network_parameters';

    public function affiliatenetwork(){
        return $this->belongsTo('App\Models\Affiliate\Network');
    }
}
