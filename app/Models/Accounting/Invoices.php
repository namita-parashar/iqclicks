<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    //
    protected $table = 'invoices';

    public function companies(){
        return $this->hasMany('App\Models\Accounting\Companies');
    }
    public function paymentProfiles(){
        return $this->hasMany('App\Models\Accounting\PaymentProfile');
    }
    public function bankAccounts(){
        return $this->hasMany('App\Models\Accounting\BankAccounts');
    }
    public function attachments(){
        return $this->hasMany('App\Models\Accounting\Attachment');
    }
    public function accountingBook(){
        return $this->belongsTo('App\Models\Accounting\Books');
    }
}
