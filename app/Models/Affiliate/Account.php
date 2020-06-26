<?php

namespace App\Models\Affiliate;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
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
    public function trackerOffers()
    {
        return $this->belongsToMany('App\Models\Tracker\Offer','affiliate_account_offer_referer','affiliate_account_id','tracker_offer_id');
    }
    public function trackerAffiliateNetworks(){
        return $this->hasMany('App\Models\Tracker\AffiliateNetwork');
    }
    public function agencies(){
        return $this->hasMany('App\Models\Agency');
    }
    public function bankAccounts(){
        return $this->hasMany('App\Models\Accounting\BankAccount');
    }

}
