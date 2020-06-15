<?php

namespace App\Models\Affiliate;

use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    //
    protected $table = 'affiliate_network';

    public function parameters(){
        return $this->hasMany('App\Model\NetworkParameters');
    }
}
