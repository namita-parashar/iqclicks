<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;

class PaymentProfile extends Model
{
    //
    protected $table = 'payment_profiles';

    public function domainProvider(){
        return $this->belongsTo('App/Models/Domain/Provider');
    }
    public function trafficSourceAccount(){
        return $this->belongsTo('App\Models\TrafficSource\TrafficSource','payment_profile_id');
    }
    public function invoice(){
        return $this->belongsTo('App\Models\Accounting\Invoice');
    }
    public function bankAccounts(){
        return $this->hasMany('App\Models\Accounting\BankAccount');
    }
}
