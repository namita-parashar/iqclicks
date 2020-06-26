<?php

namespace App\Models\Browser;

use Illuminate\Database\Eloquent\Model;

class Browser extends Model
{
    //
    protected $table='browsers';

    public function version(){
        return $this->belongsTo('App\Models\Browser\Version');
    }
}
