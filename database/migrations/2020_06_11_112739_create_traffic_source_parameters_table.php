<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrafficSourceParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traffic_source_parameters', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('traffic_source_id')->unsigned();
            $table->foreign('traffic_source_id')->references('id')->on('traffic_sources')->onDelete('cascade');
            $table->string('ts_name');
            $table->string('ts_parameter');
            $table->string('ts_token');
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
        Schema::dropIfExists('traffic_source_parameters');
    }
}
