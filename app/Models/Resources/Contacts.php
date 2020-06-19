<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    //
    protected $table = 'contacts';

    public function domainProvider(){
        return $this->belongsTo('App/Models/Domain/Provider');
    }
}
