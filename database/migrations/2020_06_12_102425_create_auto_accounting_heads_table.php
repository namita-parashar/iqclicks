<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoAccountingHeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto_accounting_heads', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->string('transaction_type')->nullable();
            $table->integer('agency_id')->unsigned();
            $table->foreign('agency_id')->references('id')->on('agencies')->onDelete('cascade');
            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('accounting_companies')->onDelete('cascade');
            $table->integer('accounting_head_id')->unsigned();
            $table->foreign('accounting_head_id','head_fk')->references('id')->on('accounting_heads')->onDelete('cascade');
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
        Schema::dropIfExists('auto_accounting_heads');
    }
}
