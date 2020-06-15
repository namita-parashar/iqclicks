<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    //
    protected $table = 'contacts';

    public function domainProviders(){
        return $this->hasMany('App/Models/Domain/Provider');
    }
}
