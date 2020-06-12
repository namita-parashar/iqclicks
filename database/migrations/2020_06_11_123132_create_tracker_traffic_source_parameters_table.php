<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackerTrafficSourceParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracker_traffic_source_parameters', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('ts_name');
            $table->string('ts_parameter');
            $table->string('ts_token');
            $table->string('iq_token');
            $table->integer('tracker_ts_id')->unsigned()->comments('tracker_traffic_source_id');
            $table->foreign('tracker_ts_id')->references('id')->on('tracker_traffic_sources')->onDelete('cascade');
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
        Schema::dropIfExists('tracker_traffic_source_parameters');
    }
}
