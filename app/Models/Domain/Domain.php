<?php

namespace App\Models\Domain;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    //
    protected $table='domains';
    
    public function trackerLander(){
        return $this->belongsTo('App\Models\Tracker\Lander','domain_id');
    }
    public function workspaces(){
        return $this->morphToMany('App\Models\Workspace\Workspace','assetable');
    }
    public function trackerCampaigns(){
        return $this->hasMany('App\Models\Tracker\Campaign');
    }
    public function domainProviders(){
        return $this->hasMany('App\Models\Domains\Provider');
    }
    
}
