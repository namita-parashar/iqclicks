<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTrackerAffiliateNetwokrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tracker_affiliate_networks', function (Blueprint $table) {
            //
            $table->text('notes')->change();
            $table->unsignedInteger('timezone_id')->onDelete('set null')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tracker_affiliate_networks', function (Blueprint $table) {
            //
        });
    }
}
