<?php

namespace App\Models\Os;

use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    //
    protected $table='os_versions';

    public function oss(){
        return $this->hasMany('App\Models\Os\Os');
    }
}
