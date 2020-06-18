<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    //
    protected $table = 'accounting_companies';

    public function invoice(){
        return $this->belongsTo('App\Models\Accounting\Invoices');
    }
    public function bankAccount(){
        return $this->belongsTo('App\Models\Accounting\BankAccounts');
    }
    public function accountingBook(){
        return $this->belongsTo('App\Models\Accounting\Books');
    }
    public function agencies(){
        return $this->hasMany('App\Models\Agencies');
    }
    public function autoAccountingHead(){
        return $this->belongsTo('App\Models\Accounting\AutoAccountingHeads');
    }
}

