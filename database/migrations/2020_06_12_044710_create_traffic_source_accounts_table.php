<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrafficSourceAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traffic_source_accounts', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->string('account_id');
            $table->integer('agency_id')->unsigned();
            $table->foreign('agency_id')->references('id')->on('agencies')->onDelete('cascade');
            $table->integer('tracker_ts_id')->unsigned()->comments('tracker_traffic_source_id');
            $table->foreign('tracker_ts_id')->references('id')->on('tracker_traffic_sources')->onDelete('cascade');
            $table->integer('payment_profile_id')->unsigned();
            $table->foreign('payment_profile_id')->references('id')->on('payment_profiles')->onDelete('cascade');
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
        Schema::dropIfExists('traffic_source_accounts');
    }
}
