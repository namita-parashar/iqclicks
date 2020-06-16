<?php

namespace App\Models\Affiliate;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    //
    protected $table = 'affiliate_accounts';
    public function integrations(){
        return $this->morphToMany('App\Models\Integration\Integration','applicable');
    }
    public function workspaces(){
        return $this->morphToMany('App\Models\Workspace\Workspace','assetable');
    }
    public function websites(){
        return $this->morphToMany('App\Models\Website\Website','relatable');
    }
    public function trackerPaths(){
        return $this->morphToMany('App\Models\Tracker\Path','linkable');
    }
    public function affiliateAccountOfferReferers(){
        return $this->hasMany('App\Models\Affiliate\AccountOfferReferer');
    }

}
