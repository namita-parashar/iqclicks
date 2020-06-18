<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;

class AutoAccountingHead extends Model
{
    //
    protected $table = 'auto_accounting_heads';

    public function agency(){
        return $this->belongsTo('App\Models\Agencies');
    }
    public function accountingCompany(){
        return $this->belongsTo('App\Models\Accounting\Companies');
    }
    public function accountingHeads(){
        return $this->belongsTo('App\Models\Accounting\Heads');
    }
}
