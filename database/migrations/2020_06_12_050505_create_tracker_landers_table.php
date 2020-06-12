<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackerLandersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracker_landers', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('url');
            $table->string('name');
            $table->string('number_of_cta')->nullable();
            $table->string('type');
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->integer('domain_id')->unsigned();
            $table->foreign('domain_id')->references('id')->on('domains')->onDelete('cascade');
            $table->boolean('is_redirectless')->default(true);
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('tracker_landers');
    }
}
