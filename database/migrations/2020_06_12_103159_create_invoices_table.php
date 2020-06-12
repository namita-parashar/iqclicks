<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('transaction_type')->nullable();
            $table->string('billing_period');
            $table->date('invoice_date');
            $table->string('invoice_number');
            $table->float('amount',8,2)->nullable();
            $table->string('currency')->nullable();
            $table->tinyinteger('status')->nullable();
            $table->string('notes')->nullable();
            $table->integer('accounting_company_id')->unsigned();
            $table->foreign('accounting_company_id')->references('id')->on('accounting_companies')->onDelete('cascade');
            $table->integer('payment_profile_id')->unsigned();
            $table->foreign('payment_profile_id')->references('id')->on('payment_profiles')->onDelete('cascade');
            $table->integer('bank_account_id')->unsigned();
            $table->foreign('bank_account_id')->references('id')->on('bank_accounts')->onDelete('cascade');
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
        Schema::dropIfExists('invoices');
    }
}
