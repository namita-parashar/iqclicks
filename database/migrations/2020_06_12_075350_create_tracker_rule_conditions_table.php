<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackerRuleConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracker_rule_conditions', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('condition_field');
            $table->string('condition_operator');
            $table->string('condition_value');
            $table->integer('tracker_rule_id')->unsigned();
            $table->foreign('tracker_rule_id')->references('id')->on('tracker_rules')->onDelete('cascade');
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
        Schema::dropIfExists('tracker_rule_conditions');
    }
}
