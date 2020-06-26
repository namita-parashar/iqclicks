<?php

namespace App\Models\Affiliate;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    protected $table = 'affiliate_offers';

    public function parameters(){
        return $this->hasMany('App\Model\NetworkParameter');
    }
    public function countries(){
        return $this->morphedByMany('App\Models\Location\Country','applicable');
    }
    public function devices(){
        return $this->morphedByMany('App\Models\Device','applicable');
    }
    public function languages(){
        return $this->morphedByMany('App\Models\Language','applicable');
    }
    public function states(){
        return $this->morphedByMany('App\Models\Location\State','applicable');
    }
   public function affiliateNetworks(){
        return $this->morphedByMany('App\Models\Affiliate\Network','applicable');
    }
    public function trackerOffers(){
        return $this->morphedByMany('App\Models\Tracker\Offer','assetable');
    }
    public function workspaces(){
        return $this->morphToMany('App\Models\Workspace\Workspace','assetable');
    }
    public function affiliateNetworkOffer(){
        return $this->belongsTo('App\Models\Affiliate\Network');
    }
    public function trackerPaths(){
        return $this->morphToMany('App\Models\Tracker\Path','linkable');
    }
   public function categories(){
        return $this->belongsToMany('App\Models\Category\Category');
    }
}
