<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $table = 'accounting_companies';

    public function invoice(){
        return $this->belongsTo('App\Models\Accounting\Invoice');
    }
    public function bankAccount(){
        return $this->belongsTo('App\Models\Accounting\BankAccount');
    }
    public function accountingBook(){
        return $this->belongsTo('App\Models\Accounting\Book');
    }
    public function agencies(){
        return $this->hasMany('App\Models\Agency');
    }
    public function autoAccountingHead(){
        return $this->belongsTo('App\Models\Accounting\AutoAccountingHead');
    }
}

