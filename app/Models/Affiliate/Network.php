<?php

namespace App\Models\Affiliate;

use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    //
    protected $table = 'affiliate_networks';

    public function parameters(){
        return $this->hasMany('App\Model\NetworkParameters');
    }
    public function offers(){
        return $this->morphToMany('App\Models\Affiliate\Offers','applicable');
    }

    public function affiliateAccount(){
        return $this->belongsTo('App\Models\Affiliate\Accounts','tracker_affiliate_network_id');
    }
    public function workspaces(){
        return $this->morphToMany('App\Models\Workspace\Workspace','assetable');
    }
    public function timezone(){
        return $this->belongsTo('App\Models\Timezone');
    }
}
