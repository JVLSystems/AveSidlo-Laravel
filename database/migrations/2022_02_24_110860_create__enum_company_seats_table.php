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
        Schema::create('enum__company_seats', function (Blueprint $table) {
            $table->id();
            $table->string('street')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->unsignedBigInteger('zip_id')->nullable();
            $table->unsignedBigInteger('type_of_space')->nullable();
            $table->string('space_owner');
            $table->foreign('city_id')->references('id')->on('enum__cities');
            $table->foreign('zip_id')->references('id')->on('enum__zip');
            $table->foreign('type_of_space')->references('id')->on('enum__type_of_spaces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enum__company_seats');
    }
};
