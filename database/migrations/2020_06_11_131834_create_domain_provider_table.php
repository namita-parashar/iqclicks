<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainProviderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domain_provider', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('account_name');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->string('notes')->nullable();
            $table->tinyinteger('status')->nullable();
            $table->integer('contact_id')->unsigned();
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
            $table->integer('integration_id')->unsigned();
            $table->foreign('integration_id')->references('id')->on('integrations')->onDelete('cascade');
            $table->integer('payment_profile_id')->unsigned();
            $table->foreign('payment_profile_id')->references('id')->on('payment_profiles')->onDelete('cascade');
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
        Schema::dropIfExists('domain_provider');
    }
}
