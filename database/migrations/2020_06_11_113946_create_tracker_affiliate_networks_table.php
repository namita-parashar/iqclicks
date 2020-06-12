<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackerAffiliateNetworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracker_affiliate_networks', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->string('currency')->nullable();
            $table->string('postback_url')->nullable();
            $table->boolean('accept_duplicate_postback')->default(true);
            $table->boolean('append_clickid')->default(true);
            $table->boolean('accept_postback_from_whitelist')->default(true);
            $table->string('notes')->nullable();
            $table->integer('affiliate_network_id')->unsigned();
            $table->foreign('affiliate_network_id')->references('id')->on('affiliate_networks')->onDelete('cascade');
            $table->integer('agency_id')->unsigned();
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
        Schema::dropIfExists('tracker_affiliate_networks');
    }
}
