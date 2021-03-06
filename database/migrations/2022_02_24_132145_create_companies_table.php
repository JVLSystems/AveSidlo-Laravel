<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->unsignedBigInteger('zip_id')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->string('name');
            $table->string('ico', 50);
            $table->string('dic', 50)->nullable();
            $table->string('icdph', 50)->nullable();
            $table->string('street')->nullable();
            $table->datetime('payment_at')->nullable();
            $table->tinyInteger('is_paid')->default(0)->nullable();
            $table->tinyInteger('is_main')->default(0)->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('city_id')->references('id')->on('enum__cities');
            $table->foreign('zip_id')->references('id')->on('enum__zip');
            $table->foreign('state_id')->references('id')->on('enum__state');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
