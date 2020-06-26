<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;

class BillingInformation extends Model
{
    //
    protected $table='billing_information';
    
    public function agencies(){
        return $this->hasMany('App\Models\Agency','agency_id');
    }
    public function users(){
        return $this->morphToMany('App\User','assetable');
    }

}
