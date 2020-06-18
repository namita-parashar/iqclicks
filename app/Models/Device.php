<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    //
    protected $table = 'devices';
    
    public function offers(){
        return $this->morphToMany('App\Models\Device','applicable');
    }
}
