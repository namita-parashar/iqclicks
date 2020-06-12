<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domains', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('type')->nullable();
            $table->string('domain');
            $table->string('logo')->nullable();
            $table->date('expiry_date');
            $table->date('renewal_date');
            $table->string('name_server1')->nullable();
            $table->string('name_server2')->nullable();
            $table->integer('domain_provider_id')->unsigned();
            $table->foreign('domain_provider_id')->references('id')->on('domain_provider')->onDelete('cascade');
            $table->tinyinteger('status')->nullable();
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
        Schema::dropIfExists('domains');
    }
}
