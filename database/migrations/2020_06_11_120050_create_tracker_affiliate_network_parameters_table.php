<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackerAffiliateNetworkParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracker_affiliate_network_parameters', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('network_id')->unsigned()->comments('tracker_affiliate_network_id');
            $table->foreign('network_id')->references('id')->on('tracker_affiliate_networks')->onDelete('cascade');
            $table->string('aff_name');
            $table->string('aff_parameter');
            $table->string('aff_token');
            $table->string('iq_token')->nullable();
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
        Schema::dropIfExists('tracker_affiliate_network_parameters');
    }
}
