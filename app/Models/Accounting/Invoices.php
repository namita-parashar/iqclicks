<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    //
    protected $table = 'invoices';

    public function company(){
        return $this->belongsTo('App\Models\Accounting\Companies');
    }
    public function paymentProfile(){
        return $this->belongsTo('App\Models\Accounting\PaymentProfile');
    }
    public function bankAccount(){
        return $this->belongsTo('App\Models\Accounting\BankAccounts');
    }
    public function attachment(){
        return $this->belongsTo('App\Models\Accounting\Attachment');
    }
    public function accountingBooks(){
        return $this->hasMany('App\Models\Accounting\Books');
    }
}
