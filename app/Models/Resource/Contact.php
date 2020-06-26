<?php

namespace App\Models\Resource;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $table = 'contacts';

    public function domainProvider(){
        return $this->belongsTo('App/Models/Domain/Provider');
    }
}
