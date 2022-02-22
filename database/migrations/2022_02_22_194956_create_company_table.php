<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            // $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('city_id')->nullable();
            $table->unsignedBigInteger('zip_id')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->string('name');
            $table->string('ico', 50);
            $table->string('dic', 50)->nullable();
            $table->string('icdph', 50)->nullable();
            $table->string('street')->nullable();
            $table->datetime('payment_at')->nullable();
            $table->tinyInteger('is_paid')->nullable();
            $table->tinyInteger('is_main')->nullable();
            $table->integer('status');
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
        Schema::dropIfExists('company');
    }
}
