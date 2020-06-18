<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    //
    protected $table = 'departments';

    public function agency(){
        return $this->belongsTo('App\Models\Agencies','agency_id');
    }
    public function users(){
        return $this->morphToMany('App\User','assetable');
    }
}
