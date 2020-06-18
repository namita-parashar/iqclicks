<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    //
    protected $table = 'accounting_companies';

    public function invoices(){
        return $this->hasMany('App\Models\Accounting\Invoices');
    }
    public function bankAccounts(){
        return $this->hasMany('App\Models\Accounting\BankAccounts');
    }
    public function accountingBooks(){
        return $this->hasMany('App\Models\Accounting\Books');
    }
    public function agency(){
        return $this->belongsTo('App\Models\Agencies');
    }
    public function autoAccountingHeads(){
        return $this->hasMany('App\Models\Accounting\AutoAccountingHeads');
    }
}

