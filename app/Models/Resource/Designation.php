<?php

namespace App\Models\Resource;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    //
    protected $table = 'designations';

    public function agencies(){
        return $this->hasMany('App\Models\Agency','agency_id');
    }
    public function users(){
        return $this->morphToMany('App\User','assetable');
    }
}
