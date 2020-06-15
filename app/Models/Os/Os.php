<?php

namespace App\Models\Os;

use Illuminate\Database\Eloquent\Model;

class Os extends Model
{
    //
    protected $table ='os';

    public function versions(){
        return $this->hasMany('App\Models\Os\Verions');
    }
}
