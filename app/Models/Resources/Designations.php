<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Designations extends Model
{
    //
    protected $table = 'designations';

    public function agencies(){
        return $this->hasMany('App\Models\Agencies','agency_id');
    }
    public function users(){
        return $this->morphToMany('App\User','assetable');
    }
}
