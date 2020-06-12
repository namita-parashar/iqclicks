<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('bank_name');
            $table->string('account_number');
            $table->string('swift_code')->nullable();
            $table->string('ifsc_code')->nullable();
            $table->string('bank_address')->nullable();
            $table->string('country');
            $table->string('currency')->nullable();
            $table->string('notes')->nullable();
            $table->integer('accounting_company_id')->unsigned();
            $table->foreign('accounting_company_id')->references('id')->on('accounting_companies')->onDelete('cascade');
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
        Schema::dropIfExists('bank_accounts');
    }
}
