<?php 
namespace App\Helpers\Accounting;

use App\Models\Accounting\BankAccount;
use App\Models\Accounting\Company;
use App\Models\Accounting\Head;
use App\Models\Accounting\Attachment;
use App\Models\Accounting\Invoice;
use App\Models\Accounting\Book;

class BookHelper{

    public static function create(BankAccount $bank_account,Company $company,Head $head,Attachment $attachment,Invoice $invoice,$data=[]){
        $book = new Book;
        $book->transaction_date = $data['transaction_date'] ?? "";
        $book->transaction_value_date = $data['transaction_value_date'] ?? "";
        $book->cheque = $data['cheque'] ?? "";
        $book->description = $data['description'] ?? "";
        $book->amount = $data['amount'] ?? "";
        $book->currency = $data['currency'] ?? "";
        $book->transaction_type = $data['transaction_type'] ?? "" ;
        $book->notes = $data['notes'] ?? "";
        $book->bank_account_id = $bank_account->id;
        $book->accounting_company_id = $company->id;
        $book->accounting_head_id = $head->id;
        $book->attachment_id = $attachment->id;
        $book->invoice_id = $invoice->id;
        $book->save();
        return $book;
    }

    public static function update(Book $book,BankAccount $bank_account,Company $company,Head $head,Attachment $attachment,Invoice $invoice,$data=[]){
        $book->transaction_date = $data['transaction_date'] ?? $book->transaction_date;
        $book->transaction_value_date = $data['transaction_value_date'] ?? $book->transaction_value_date ;
        $book->cheque = $data['cheque'] ??  $book->cheque;
        $book->description = $data['description'] ?? $book->description;
        $book->amount = $data['amount'] ?? $book->amount;
        $book->currency = $data['currency'] ?? $book->currency;
        $book->transaction_type = $data['transaction_type'] ??  $book->transaction_type ;
        $book->notes = $data['notes'] ?? $book->notes;
        $book->bank_account_id = $bank_account->id;
        $book->accounting_company_id = $company->id;
        $book->accounting_head_id = $head->id;
        $book->attachment_id = $attachment->id;
        $book->invoice_id = $invoice->id;
        $book->save();
        return $book;
    }

    public static function delete(Book $book){
        return $book->delete();
    }


}