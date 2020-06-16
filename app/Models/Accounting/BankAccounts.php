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
}
