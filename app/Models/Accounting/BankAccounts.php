<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;

class BankAccounts extends Model
{
    //
    protected $table = 'bank_accounts';
    
    public function affiliateAccount(){
        return $this->belongsTo('App\Models\Affiliate\Accounts','bank_account_id');
    }
    public function invoices(){
        return $this->hasMany('App\Models\Accounting\Invoices');
    }
    public function accountingCompany(){
        return $this->belongsTo('App\Models\Accounting\Companies');
    }
    public function paymentProfile(){
        return $this->hasMany('App\Models\Accounting\PaymentProfile');
    }
}
