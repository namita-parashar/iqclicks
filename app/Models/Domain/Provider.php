<?php

namespace App\Models\Domain;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    //
    protected $table = 'domain_provider';

    public function contact(){
        return $this->belongsTo('App/Models/Contacts');
    }
    public function paymentProfile(){
        return $this->belongsTo('App/Models/Accounting/PaymentProfile');
    }
    public function integrations(){
        return $this->belongsToMany('App/Models/Integration/Integration');
    }
    public function domain(){
        return $this->belongsTo('App/Models/Domain\Provider');
    }

}
