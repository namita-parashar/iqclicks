<?php 
namespace App\Helpers\Accounting;

use App\Models\Accounting\BankAccount;
use App\Models\Accounting\Company;

class BankAccountHelper{

    public static function create(Company $company,$data=[]){
        $bank_account = new BankAccount;
        $bank_account->bank_name =$data['bank_name'] ?? "";
        $bank_account->account_number = $data['account_number'] ?? "";
        $bank_account->swift_code = $data['swift_code'] ?? "";
        $bank_account->ifsc_code  = $data['ifsc_code'] ?? "";
        $bank_account->bank_address = $data['address'] ?? "";
        $bank_account->country = $data['country'] ?? "";
        $bank_account->currency = $data['currency'] ?? "" ;
        $bank_account->notes = $data['notes'] ?? "";
        $bank_account->accounting_company_id = $company->id;
        $bank_account->save();
        return $bank_account;
    }

    public static function update(BankAccount $bank_account,Company $company,$data=[]){
        $bank_account->bank_name =$data['bank_name'] ?? $bank_account->bank_name;
        $bank_account->account_number = $data['account_number'] ?? $bank_account->account_number;
        $bank_account->swift_code = $data['swift_code'] ?? $bank_account->swift_code;
        $bank_account->ifsc_code  = $data['ifsc_code'] ?? $bank_account->ifsc_code;
        $bank_account->bank_address = $data['address'] ?? $bank_account->bank_address;
        $bank_account->country = $data['country'] ?? $bank_account->country;
        $bank_account->currency = $data['currency'] ?? $bank_account->currency;
        $bank_account->notes = $data['notes'] ?? $bank_account->notes;
        $bank_account->accounting_company_id = $company->id ?? $bank_account->accounting_company_id ;
        $bank_account->save();
        return $bank_account;
    }
    public static function delete(BankAccount $bank_account){
        return $bank_account->delete();
    }

}