<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;

class Heads extends Model
{
    //
    protected $table = 'accounting_heads';

    public function agencies(){
        return $this->hasMany('App\Models\Agencies');
    }
    public function autoAccountingHead(){
        return $this->belongsTo('App\Models\Accounting\AutoAccountingHeads');
    }
    public function accountingBook(){
        return $this->belongsTo('App\Models\Accounting\Books');
    }
}
