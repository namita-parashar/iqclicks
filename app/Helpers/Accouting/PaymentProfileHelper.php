<?php 
namespace App\Helpers\Accounting;

use App\Models\Accounting\BankAccount;
use App\Models\Accounting\PaymentProfile;

class PaymentProfileHelper{

    public static function create(BankAccount $bank_account , $data=[]){
        $payment_profile = new PaymentProfile;
        $payment_profile->name = $data['name'] ?? "";
        $payment_profile->is_invoicing = $data['is_invoicing'] ?? '1';
        $payment_profile->bank_account_id = $bank_account->id;
        $payment_profile->notes = $data['notes'] ?? "";
        $payment_profile->save();
        return $payment_profile;
    }
    
    public static function update(BankAccount $bank_account,PaymentProfile $payment_profile,$data=[]){
        $payment_profile->name = $data['name'] ?? $payment_profile->name;
        $payment_profile->is_invoicing = $data['is_invoicing'] ??$payment_profile->is_invoicing;
        $payment_profile->bank_account_id = $bank_account->id ?? $payment_profile->bank_account_id;
        $payment_profile->notes = $data['notes'] ??  $payment_profile->notes;
        $payment_profile->save();
        return $payment_profile;
    }

    public static function delete(PaymentProfile $payment_profile){
        return $payment_profile->delete();
    }

}