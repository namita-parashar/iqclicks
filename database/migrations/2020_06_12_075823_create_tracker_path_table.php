<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackerPathTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracker_path', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('tracker_rule_id')->unsigned();
            $table->foreign('tracker_rule_id')->references('id')->on('tracker_rules')->onDelete('cascade');
            $table->morphs('linkable');
            $table->float('weight',8,2)->nullable();
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
        Schema::dropIfExists('tracker_path');
    }
}
