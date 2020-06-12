<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffiliateAccountOfferRefererTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliate_account_offer_referer', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('affiliate_account_id')->unsigned()->nullable();
            $table->foreign('affiliate_account_id')->references('id')->on('affiliate_accounts')->onDelete('cascade');
            $table->integer('tracker_offer_id')->unsigned()->nullable();
            $table->foreign('tracker_offer_id')->references('id')->on('tracker_offers')->onDelete('cascade');
            $table->integer('lander_id')->unsigned()->nullable();
            $table->foreign('lander_id')->references('id')->on('tracker_landers')->onDelete('cascade');
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
        Schema::dropIfExists('affiliate_account_offer_referer');
    }
}
