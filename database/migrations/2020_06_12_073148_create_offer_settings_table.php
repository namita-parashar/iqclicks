<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_settings', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('affiliate_offer_id')->unsigned();
            $table->foreign('affiliate_offer_id')->references('id')->on('affiliate_offers')->onDelete('cascade');
            $table->morphs('applicable');
            $table->boolean('is_revshare')->default(true);
            $table->float('payout_value',8,2)->nullable();
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
        Schema::dropIfExists('offer_settings');
    }
}
