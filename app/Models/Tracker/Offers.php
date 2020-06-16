<?php

namespace App\Models\Tracker;

use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    //
    protected $table = 'tracker_offers';

    public function country(){
        return $this->belongsTo('App\Models\Country\Country');
    }
    public function affiliateAccountOfferReferers(){
        return $this->hasMany('App\Models\Affiliate\AccountOfferReferer');
    }
    public function workspaces(){
        return $this->morphToMany('App\Models\Workspace\Workspace','assetable');
    }
}
