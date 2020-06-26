<?php

namespace App\Models\Resource;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $table = 'departments';

    public function agencies(){
        return $this->hasMany('App\Models\Agency','agency_id');
    }
    public function users(){
        return $this->morphToMany('App\User','assetable');
    }
}
