<?php

namespace App\Models\Integration;

use Illuminate\Database\Eloquent\Model;

class Integration extends Model
{
    //
    protected $table = 'integrations';

    public function affiliateAccounts(){
        return $this->morphedByMany('App\Models\Affiliate\Accounts','integrable');
    }
    public function trafficSourceAccounts(){
        return $this->morphedByMany('App\Models\TrafficSource\Accounts','integrable');
    }
    public function domainProviders(){
        return $this->morphedByMany('App\Models\DOmain\Provider','integrable');
    }
}
