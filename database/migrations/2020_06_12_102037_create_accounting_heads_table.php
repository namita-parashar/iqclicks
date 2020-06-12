<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountingHeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounting_heads', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->integer('agency_id')->unsigned();
            $table->foreign('agency_id')->references('id')->on('agencies')->onDelete('cascade');
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
        Schema::dropIfExists('accounting_heads');
    }
}
