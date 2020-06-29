<?php 
namespace App\Helpers\Accounting;

use App\Models\Accounting\BankAccount;
use App\Models\Accounting\Company;
use App\Models\Accounting\PaymentProfile;
use App\Models\Accounting\Attachment;
use App\Models\Accounting\Invoice;

class InvoiceHelper{

    public static function create(BankAccount $bank_account , Company $company,PaymentProfile $payment_profile,Attachment $attachment = null,$data=[]){
        $invoice = new Invoice;
        $invoice->transaction_type = $data['transaction_type'] ?? "";
        $invoice->billing_period = $data['billing_period'] ?? "";
        $invoice->invoice_date = $data['invoice_date'] ?? "";
        $invoice->invoice_number = $data['invoice_number'] ?? "";
        $invoice->amount = $data['amount'] ?? "";
        $invoice->currency = $data['currency'] ?? "";
        $invoice->status = $data['status'] ?? "";
        $invoice->notes = $data['notes']?? "";
        $invoice->accounting_company_id = $company->id;
        $invoice->payment_profile_id = $payment_profile->id;
        $invoice->bank_account_id = $bank_account->id;
        $invoice->attachment_id = $attachment->id;
        $invoice->save();
        return $invoice;
    }

    public static function update(Invoice $invoice, BankAccount $bank_account , Company $company,PaymentProfile $payment_profile,Attachment $attachment = null,$data=[]){
        $invoice->transaction_type = $data['transaction_type'] ?? $invoice->transaction_type;
        $invoice->billing_period = $data['billing_period'] ?? $invoice->billing_period;
        $invoice->invoice_date = $data['invoice_date'] ?? $invoice->invoice_date;
        $invoice->invoice_number = $data['invoice_number'] ?? $invoice->invoice_number;
        $invoice->amount = $data['amount'] ?? $invoice->amount;
        $invoice->currency = $data['currency'] ?? $invoice->currency;
        $invoice->status = $data['status'] ?? $invoice->status;
        $invoice->notes = $data['notes'] ?? $invoice->notes;
        $invoice->accounting_company_id = $company->id ?? $invoice->accounting_company_id;
        $invoice->payment_profile_id = $payment_profile->id ?? $invoice->payment_profile_id;
        $invoice->bank_account_id = $bank_account->id ?? $invoice->bank_account_id;
        $invoice->attachment_id = $attachment->id ??$invoice->attachment_id;
        $invoice->save();
        return $invoice;
    }

    public static function delete(Invoice $invoice){
        return $invoice->delete();
    }

}