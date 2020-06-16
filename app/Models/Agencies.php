<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agencies extends Model
{
    //
    protected $table = 'agencies';
    
    public function affiliateAccount(){
        return $this->belongsTo('App\Models\Affiliate\Accounts','agency_id');
    }

    public function trafficSourceAccount(){
        return $this->belongsTo('App\Models\TrafficSource\TrafficSource','agency_id');
    }
}
