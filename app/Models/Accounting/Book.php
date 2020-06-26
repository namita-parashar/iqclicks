<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $table = 'accounting_books';

    public function bankAccounts(){
        return $this->hasMany('App\Models\Accounting\BankAccount');
    }
    public function accountingHeads(){
        return $this->hasMany('App\Models\Accounting\Head');
    }
    public function accountingCompanies(){
        return $this->hasMany('App\Models\Accounting\Company');
    }
    public function invoices(){
        return $this->hasMany('App\Models\Accounting\Invoice');
    }
    public function attachments(){
        return $this->hasMany('App\Models\Accounting\Attachment');
    }
}
