<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    //
    protected $table = 'teams';

    public function agencies(){
        return $this->hasMany('App\Models\Agencies','agency_id');
    }
    public function users(){
        return $this->morphToMany('App\User','assetable');
    }
    public function workspaces(){
        return $this->morphToMany('App\Models\Workspace\Workspace','memberable');
    }

}
