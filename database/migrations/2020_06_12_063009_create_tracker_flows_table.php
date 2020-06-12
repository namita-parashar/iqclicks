<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackerFlowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracker_flows', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->string('type');
            $table->string('redirect_mode');
            $table->string('notes')->nullable();
            $table->integer('lander_id')->unsigned();
            $table->foreign('lander_id')->references('id')->on('tracker_landers')->onDelete('cascade');
            $table->integer('workspace_id')->unsigned();
            $table->foreign('workspace_id')->references('id')->on('workspaces')->onDelete('cascade');
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
        Schema::dropIfExists('tracker_flows');
    }
}
