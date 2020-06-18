<?php

namespace App\Models\Affiliate;

use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    //
    protected $table = 'affiliate_offers';

    public function parameters(){
        return $this->hasMany('App\Model\NetworkParameters');
    }
    public function countries(){
        return $this->morphedByMany('App\Models\Location\Country','applicable');
    }
    public function devices(){
        return $this->morphedByMany('App\Models\Device','applicable');
    }
    public function languages(){
        return $this->morphedByMany('App\Models\Languages','applicable');
    }
    public function trackerOffers(){
        return $this->morphedByMany('App\Models\Tracker\Offers','assetable');
    }
    public function affiliateNetworks(){
        return $this->morphedByMany('App\Models\Affiliate\Network','applicable');
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
