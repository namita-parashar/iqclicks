<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    //
    protected $table = 'departments';

    public function agencies(){
        return $this->hasMany('App\Models\Agencies','agency_id');
    }
    public function users(){
        return $this->morphToMany('App\User','assetable');
    }
}
