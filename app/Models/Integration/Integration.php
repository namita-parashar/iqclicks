<?php

namespace App\Models\Integration;

use Illuminate\Database\Eloquent\Model;

class Integration extends Model
{
    //
    protected $table = 'integrations';

    public function affiliateAccounts(){
        return $this->morphedByMany('App\Models\Affiliate\Account','integrable');
    }
    public function trafficSourceAccounts(){
        return $this->morphedByMany('App\Models\TrafficSource\Account','integrable');
    }
    public function domainProviders(){
        return $this->morphedByMany('App\Models\DOmain\Provider','integrable');
    }
}
