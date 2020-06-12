<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackerConversionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracker_conversions', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedBigInteger('click_report_id');
            $table->foreign('click_report_id')->references('id')->on('click_report')->onDelete('cascade');
            $table->double('conversions',8,2)->nullable();
            $table->double('revenue',8,2)->nullable();
            $table->string('transaction');
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
        Schema::dropIfExists('tracker_conversions');
    }
}
