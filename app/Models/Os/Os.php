<?php

namespace App\Models\Os;

use Illuminate\Database\Eloquent\Model;

class Os extends Model
{
    //
    protected $table ='os';

    public function version(){
        return $this->belongsTo('App\Models\Os\Verion');
    }
}
