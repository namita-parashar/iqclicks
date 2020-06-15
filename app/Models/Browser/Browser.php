<?php

namespace App\Models\Browser;

use Illuminate\Database\Eloquent\Model;

class Browser extends Model
{
    //
    protected $table='browsers';

    public function versions(){
        return $this->hasMany('App\Models\Browser\Verions');
    }
}
