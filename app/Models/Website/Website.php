<?php

namespace App\Models\Website;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    //
    protected $table = 'websites';
    
    public function categories(){
        return $this->morphedByMany('App\Models\Category\Category','relatable');
    }
    public function affiliateAccounts(){
        return $this->morphedByMany('App\Models\Affiliate\Accounts','relatable');
    }
}
