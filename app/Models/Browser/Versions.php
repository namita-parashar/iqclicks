<?php

namespace App\Models\Browser;

use Illuminate\Database\Eloquent\Model;

class Versions extends Model
{
    //
    protected $table = 'browser_versions';

    public function browser(){
        return $this->belongsTo('App\Models\Browser\Browser');
    }
}
