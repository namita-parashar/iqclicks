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
    public function department(){
        return $this->belongsTo('App\Models\Resources\Departments');
    }
    public function designation(){
        return $this->belongsTo('App\Models\Resources\Designations');
    }
    public function workspace(){
        return $this->belongsTo('App\Models\Workspace\Workspace');
    }
    public function team(){
        return $this->belongsTo('App\Models\Resources\Teams');
    }
    public function billingInformation(){
        return $this->belongsTo('App\Models\Accounting\BillingInformation');
    }
    public function accountingHead(){
        return $this->belongsTo('App\Models\Accounting\Heads');
    }
    public function accountingCompany(){
        return $this->belongsTo('App\Models\Accounting\Companies');
    }
    public function autoAccountingHead(){
        return $this->belongsTo('App\Models\Accounting\AutoAccountingHeads');
    }
    public function users(){
        return $this->morphToMany('App\User','assetable');
    }
}
