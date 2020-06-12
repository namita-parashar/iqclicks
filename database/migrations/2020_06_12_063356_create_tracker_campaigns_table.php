<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackerCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracker_campaigns', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('parent_group_id')->nullable();
            $table->string('slug')->nullable();
            $table->string('name');
            $table->string('type');
            $table->string('redirect_mode');
            $table->string('notes')->nullable();
            $table->integer('domain_id')->unsigned();
            $table->foreign('domain_id')->references('id')->on('domains')->onDelete('cascade');
            $table->integer('tracker_flow_id')->unsigned();
            $table->foreign('tracker_flow_id')->references('id')->on('tracker_flows')->onDelete('cascade');
            $table->integer('lander_id')->unsigned()->nullable();
            $table->foreign('lander_id')->references('id')->on('tracker_landers')->onDelete('cascade');
            $table->integer('workspace_id')->unsigned();
            $table->foreign('workspace_id')->references('id')->on('workspaces')->onDelete('cascade');
            $table->integer('tracker_ts_id')->unsigned()->comments('tracker_traffic_source_id');
            $table->foreign('tracker_ts_id')->references('id')->on('tracker_traffic_sources')->onDelete('cascade');
            $table->integer('ts_account_id')->unsigned()->comments('traffic_source_account_id');
            $table->foreign('ts_account_id')->references('id')->on('traffic_source_accounts')->onDelete('cascade');
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
        Schema::dropIfExists('tracker_campaigns');
    }
}
