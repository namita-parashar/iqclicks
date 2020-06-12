<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffiliateNetworkParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliate_network_parameters', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('affiliate_network_id')->unsigned();
            $table->foreign('affiliate_network_id')->references('id')->on('affiliate_networks')->onDelete('cascade');
            $table->string('aff_name');
            $table->string('aff_parameter');
            $table->string('aff_token');
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
        Schema::dropIfExists('affiliate_network_parameters');
    }
}
