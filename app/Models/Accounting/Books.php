<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    //
    protected $table = 'accounting_books';

    public function accountingHead(){
        return $this->belongsTo('App\Models\Accounting\Heads');
    }
    public function accountingCompany(){
        return $this->belongsTo('App\Models\Accounting\Companies');
    }
    public function invoice(){
        return $this->belongsTo('App\Models\Accounting\Invoices');
    }
    public function attachment(){
        return $this->belongsTo('App\Models\Accounting\Attachment');
    }
}
