<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    //
    protected $table = 'accounting_books';

    public function bankAccounts(){
        return $this->hasMany('App\Models\Accounting\Heads');
    }
    public function accountingHeads(){
        return $this->hasMany('App\Models\Accounting\Heads');
    }
    public function accountingCompanies(){
        return $this->hasMany('App\Models\Accounting\Companies');
    }
    public function invoices(){
        return $this->hasMany('App\Models\Accounting\Invoices');
    }
    public function attachments(){
        return $this->hasMany('App\Models\Accounting\Attachment');
    }
}
