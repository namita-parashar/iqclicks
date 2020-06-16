<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;

class PaymentProfile extends Model
{
    //
    protected $table = 'payment_profile';

    public function domainProviders(){
        return $this->hasMany('App/Models/Domain/Provider');
    }
    public function trafficSourceAccount(){
        return $this->belongsTo('App\Models\TrafficSource\TrafficSource','payment_profile_id');
    }
}
