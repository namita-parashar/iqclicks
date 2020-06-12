<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClickReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('click_report', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('clickid_uuid');
            $table->string('referrer_url')->nullable();
            $table->string('user_agent')->nullable();
            $table->string('user_ip');
            $table->integer('network_id')->unsigned()->comments('tracker_affiliate_network_id');
            $table->foreign('network_id')->references('id')->on('tracker_affiliate_networks')->onDelete('cascade');
            $table->integer('ts_account_id')->unsigned()->comments('traffic_source_account_id');
            $table->foreign('ts_account_id')->references('id')->on('traffic_source_accounts')->onDelete('cascade');
            $table->integer('affiliate_account_id')->unsigned()->nullable();
             $table->foreign('affiliate_account_id')->references('id')->on('affiliate_accounts')->onDelete('cascade');
            $table->integer('campaign_id')->unsigned()->nullable();
            $table->foreign('campaign_id')->references('id')->on('tracker_campaigns')->onDelete('cascade');
            $table->integer('tracker_ts_id')->unsigned()->comments('tracker_traffic_source_id');
            $table->foreign('tracker_ts_id')->references('id')->on('tracker_traffic_sources')->onDelete('cascade');
            $table->integer('lander_id')->unsigned()->nullable();
            $table->foreign('lander_id')->references('id')->on('tracker_landers')->onDelete('cascade');
            $table->integer('sub_lander_id')->unsigned()->nullable();
            $table->foreign('sub_lander_id')->references('id')->on('tracker_landers')->onDelete('cascade');
            $table->integer('tracker_offer_id')->unsigned()->nullable();
            $table->foreign('tracker_offer_id')->references('id')->on('tracker_offers')->onDelete('cascade');
            $table->integer('domain_id')->unsigned();
            $table->foreign('domain_id')->references('id')->on('domains')->onDelete('cascade');
            $table->integer('referrer_id')->unsigned();
            $table->foreign('referrer_id')->references('id')->on('referrers')->onDelete('cascade');
            $table->integer('device_id')->unsigned();
            $table->foreign('device_id')->references('id')->on('devices')->onDelete('cascade');
            $table->integer('browser_id')->unsigned();
            $table->foreign('browser_id')->references('id')->on('browsers')->onDelete('cascade');
            $table->integer('browser_version_id')->unsigned();
            $table->foreign('browser_version_id')->references('id')->on('browser_versions')->onDelete('cascade');
            $table->integer('os_id')->unsigned();
            $table->foreign('os_id')->references('id')->on('os')->onDelete('cascade');
            $table->integer('os_version_id')->unsigned();
            $table->foreign('os_version_id')->references('id')->on('os_versions')->onDelete('cascade');
            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->integer('brand_model_id')->unsigned();
            $table->foreign('brand_model_id')->references('id')->on('brand_models')->onDelete('cascade');
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->integer('isp_id')->unsigned();
            $table->foreign('isp_id')->references('id')->on('isps')->onDelete('cascade');
            $table->integer('connection_type_id')->unsigned();
            $table->foreign('connection_type_id')->references('id')->on('connection_types')->onDelete('cascade');
            $table->integer('proxy_type_id')->unsigned();
            $table->foreign('proxy_type_id')->references('id')->on('proxy_types')->onDelete('cascade');
            $table->string('var0');
            $table->string('var1');
            $table->string('var2');
            $table->string('var3');
            $table->string('var4');
            $table->string('var5');
            $table->string('var6');
            $table->string('var7');
            $table->string('var8');
            $table->string('var9');
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
        Schema::dropIfExists('click_report');
    }
}
