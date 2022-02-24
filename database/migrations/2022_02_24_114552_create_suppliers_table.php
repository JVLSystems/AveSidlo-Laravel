<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->unsignedBigInteger('zip_id')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->string('name');
            $table->string('ico');
            $table->string('dic')->nullable();
            $table->string('icdph')->nullable();
            $table->string('street')->nullable();
            $table->tinyInteger('active');
            $table->timestamps();
            $table->foreign('city_id')->references('id')->on('enum__cities');
            $table->foreign('zip_id')->references('id')->on('enum__zip');
            $table->foreign('state_id')->references('id')->on('enum__state');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
};
