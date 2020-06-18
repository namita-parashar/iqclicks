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
    public function departments(){
        return $this->hasMany('App\Models\Departments');
    }
    public function designations(){
        return $this->hasMany('App\Models\Designations');
    }
    public function workspaces(){
        return $this->hasMany('App\Models\Workspace\Workspace');
    }
    public function teams(){
        return $this->hasMany('App\Models\Teams');
    }
    public function billingInformations(){
        return $this->hasMany('App\Models\BillingInformation');
    }
    public function accountingHeads(){
        return $this->hasMany('App\Models\Accounting\Heads');
    }
    public function accountingCompanies(){
        return $this->hasMany('App\Models\Accounting\Companies');
    }
    public function autoAccountingHeads(){
        return $this->hasMany('App\Models\Accounting\AutoAccountingHeads');
    }
    public function users(){
        return $this->morphToMany('App\User','assetable');
    }
}
