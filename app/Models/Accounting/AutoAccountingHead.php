<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;

class AutoAccountingHead extends Model
{
    //
    protected $table = 'auto_accounting_heads';

    public function agencies(){
        return $this->hasMany('App\Models\Agency');
    }
    public function accountingCompanies(){
        return $this->hasMany('App\Models\Accounting\Company');
    }
    public function accountingHeads(){
        return $this->hasMany('App\Models\Accounting\Head');
    }
}
