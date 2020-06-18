<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    //
    protected $table = 'attachment';
    
    public function invoices(){
        return $this->hasMany('App\Models\Accounting\Invoices');
    }
    public function accountingBooks(){
        return $this->hasMany('App\Models\Accounting\Books');
    }
    public function accountingBooks(){
        return $this->hasMany('App\Models\Accounting\Books');
    }
}
