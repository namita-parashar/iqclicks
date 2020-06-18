<?php

namespace App\Models\Browser;

use Illuminate\Database\Eloquent\Model;

class Versions extends Model
{
    //
    protected $table = 'browser_versions';

    public function browsers(){
        return $this->hasMany('App\Models\Browser\Browser');
    }
}
