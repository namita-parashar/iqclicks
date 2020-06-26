<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    //
    protected $table = 'agencies';
    
    public function affiliateAccount(){
        return $this->belongsTo('App\Models\Affiliate\Account','agency_id');
    }
    public function trafficSourceAccount(){
        return $this->belongsTo('App\Models\TrafficSource\TrafficSource','agency_id');
    }
    public function department(){
        return $this->belongsTo('App\Models\Resource\Department');
    }
    public function designation(){
        return $this->belongsTo('App\Models\Resource\Designation');
    }
    public function workspace(){
        return $this->belongsTo('App\Models\Workspace\Workspace');
    }
    public function team(){
        return $this->belongsTo('App\Models\Resource\Team');
    }
    public function billingInformation(){
        return $this->belongsTo('App\Models\Accounting\BillingInformation');
    }
    public function accountingHead(){
        return $this->belongsTo('App\Models\Accounting\Head');
    }
    public function accountingCompany(){
        return $this->belongsTo('App\Models\Accounting\Company');
    }
    public function autoAccountingHead(){
        return $this->belongsTo('App\Models\Accounting\AutoAccountingHead');
    }
    public function users(){
        return $this->morphToMany('App\User','assetable');
    }
}
