<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    //
    protected $table = 'attachment';
    
    public function invoice(){
        return $this->belongsTo('App\Models\Accounting\Invoice');
    }
    public function accountingBook(){
        return $this->belongsTo('App\Models\Accounting\Book');
    }
}
