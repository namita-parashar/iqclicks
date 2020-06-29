<?php 
namespace App\Helpers\Accounting;

use App\Models\Agency;
use App\Models\Accounting\Company;
use App\Models\Accounting\Head;
use App\Models\Accounting\AutoAccountingHead;

class AutoAccountingHeadHelper{

    public static function create(Agency $agency,Company $company,Head $head,$data=[]){
        $auto_accounting_head = new AutoAccountingHead;
        $auto_accounting_head->name= $data['name'] ?? "";
        $auto_accounting_head->agency_id = $agency->id;
        $auto_accounting_head->company_id = $company->id;
        $auto_accounting_head->transaction_type = $data['transaction_type'] ?? "";
        $auto_accounting_head->accouting_head_id = $head->id;
        $auto_accounting_head->save();
        return $auto_accounting_head;

    }

    public static function update(AutoAccountingHead $auto_accounting_head,Agency $agency,Company $company,Head $head,$data=[]){
        $auto_accounting_head->name= $data['name'] ?? $auto_accounting_head->name;
        $auto_accounting_head->agency_id = $agency->id;
        $auto_accounting_head->company_id = $company->id;
        $auto_accounting_head->transaction_type = $data['transaction_type'] ?? $auto_accounting_head->transaction_type;
        $auto_accounting_head->accouting_head_id = $head->id;
        $auto_accounting_head->save();
        return $auto_accounting_head;

    }

    public static function delete(AutoAccountingHead $auto_accounting_head){
        return $auto_accounting_head->delete();
    }
}