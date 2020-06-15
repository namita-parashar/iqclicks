<?php

namespace App\Models\Os;

use Illuminate\Database\Eloquent\Model;

class Versions extends Model
{
    //
    protected $table='os_versions';

    public function os(){
        return $this->belongsTo('App\Models\Os\Os');
    }
}
