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
        Schema::create('founders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_items_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->unsignedBigInteger('zip_id')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->unsignedBigInteger('owner_type')->nullable();
            $table->unsignedBigInteger('gender')->nullable();
            $table->string('ico')->nullable();
            $table->string('company_name')->nullable();
            $table->string('street');
            $table->string('name');
            $table->date('date_of_birth');
            $table->string('birth_id');
            $table->string('nationality')->nullable();
            $table->unsignedBigInteger('identity_doc_type')->nullable();
            $table->string('identity_doc_number')->nullable();
            $table->double('capital')->nullable();
            $table->double('share')->nullable();
            $table->double('paid')->nullable();
            $table->tinyInteger('is_executive_manager')->default(0)->nullable();
            $table->tinyInteger('is_deposit_administrator')->default(0)->nullable();
            $table->foreign('order_items_id')->references('id')->on('order_items');
            $table->foreign('city_id')->references('id')->on('enum__cities');
            $table->foreign('zip_id')->references('id')->on('enum__zip');
            $table->foreign('state_id')->references('id')->on('enum__state');
            $table->foreign('owner_type')->references('id')->on('enum__owner_types');
            $table->foreign('gender')->references('id')->on('enum__genders');
            $table->foreign('identity_doc_type')->references('id')->on('enum__identity_doc_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('founders');
    }
};
