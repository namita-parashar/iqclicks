<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackerTrafficSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracker_traffic_sources', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->string('currency')->nullable();
            $table->string('postback_url')->nullable();
            $table->string('notes')->nullable();
            $table->integer('agency_id')->unsigned();
            $table->foreign('agency_id')->references('id')->on('agencies')->onDelete('cascade');
            $table->integer('traffic_source_id')->unsigned();
            $table->foreign('traffic_source_id')->references('id')->on('traffic_sources')->onDelete('cascade');
            $table->integer('timezone_id')->unsigned();
            $table->foreign('timezone_id')->references('id')->on('timezone')->onDelete('cascade');
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
        Schema::dropIfExists('tracker_traffic_sources');
    }
}
