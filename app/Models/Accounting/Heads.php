<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;

class Heads extends Model
{
    //
    protected $table = 'accounting_heads';

    public function agency(){
        return $this->belongsTo('App\Models\Agencies');
    }
    public function autoAccountingHeads(){
        return $this->hasMany('App\Models\Accounting\AutoAccountingHeads');
    }
}
