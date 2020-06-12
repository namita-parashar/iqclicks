<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountingBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounting_books', function (Blueprint $table) {
            $table->Increments('id');
            $table->date('transaction_date')->nullable();
            $table->string('transactions_value_date')->value();
            $table->string('cheque')->nullable();
            $table->string('description')->nullable();
            $table->float('amount',8,2)->nullable();
            $table->string('currency')->nullable();
            $table->string('transaction_type')->nullable();
            $table->string('notes')->nullable();
            $table->integer('bank_account_id')->unsigned();
            $table->foreign('bank_account_id')->references('id')->on('bank_accounts')->onDelete('cascade');
            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('accounting_companies')->onDelete('cascade');
            $table->integer('accounting_head_id')->unsigned();
            $table->foreign('accounting_head_id')->references('id')->on('accounting_heads')->onDelete('cascade');
            $table->integer('invoice_id')->unsigned();
            $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade');
            $table->integer('attachment_id')->unsigned();
            $table->foreign('attachment_id')->references('id')->on('attachment')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounting_books');
    }
}
