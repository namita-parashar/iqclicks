<?php

namespace App\Models\Resource;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $table = 'teams';

    public function agencies(){
        return $this->hasMany('App\Models\Agency','agency_id');
    }
    public function users(){
        return $this->morphToMany('App\User','assetable');
    }
    public function workspaces(){
        return $this->morphToMany('App\Models\Workspace\Workspace','memberable');
    }

}
