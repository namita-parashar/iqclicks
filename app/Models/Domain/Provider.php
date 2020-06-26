<?php

namespace App\Models\Domain;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    //
    protected $table = 'domain_provider';

    public function contacts(){
        return $this->hasMany('App\Models\Resourcs\Contact');
    }
    public function paymentProfiles(){
        return $this->hasMany('Apo\Models\Accounting\PaymentProfile');
    }
    public function domain(){
        return $this->belongsTo('App\Models\Domain\Provider');
    }
    public function integrations(){
        return $this->belongsToMany('App\Models\Integration\Integration');
    }
    public function integrationsTokens(){
        return $this->morphToMany('App\Models\Integration\Integration','integrable');
    }

}
