<?php

namespace App\Models\Tracker;

use Illuminate\Database\Eloquent\Model;

class Landers extends Model
{
    //
    protected $table ='tracker_landers';

    public function workspaces(){
        return $this->morphToMany('App\Models\Workspace\Workspace','assetable');
    }
    public function trackerCampaigns(){
        return $this->hasMany('App\Models\Tracker\Campaigns');
    }
    public function landerOffer(){
       return $this->hasMany('App\Models\Tracker\LanderOffer');
    }
    public function trackerPaths(){
        return $this->morphToMany('App\Models\Tracker\Path','linkable');
    }
    public function affiliateAccountOfferReferers(){
        return $this->hasMany('App\Models\Affiliate\AccountOfferReferer');
    }
}
