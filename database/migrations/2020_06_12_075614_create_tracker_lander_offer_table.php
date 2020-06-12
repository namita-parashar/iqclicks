<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackerLanderOfferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracker_lander_offer', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('campaign_id')->unsigned()->nullable();
            $table->foreign('campaign_id')->references('id')->on('tracker_campaigns')->onDelete('cascade');
            $table->integer('lander_id')->unsigned()->nullable();
            $table->foreign('lander_id')->references('id')->on('tracker_landers')->onDelete('cascade');
            $table->integer('affiliate_offer_id')->unsigned();
            $table->foreign('affiliate_offer_id')->references('id')->on('affiliate_offers')->onDelete('cascade');
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
        Schema::dropIfExists('tracker_lander_offer');
    }
}
