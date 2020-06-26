<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;

class Head extends Model
{
    //
    protected $table = 'accounting_heads';

    public function agencies(){
        return $this->hasMany('App\Models\Agency');
    }
    public function autoAccountingHead(){
        return $this->belongsTo('App\Models\Accounting\AutoAccountingHead');
    }
    public function accountingBook(){
        return $this->belongsTo('App\Models\Accounting\Book');
    }
}
