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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id')->nullable();
            $table->unsignedBigInteger('mj_id')->nullable();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->unsignedBigInteger('seat_id')->nullable();
            $table->unsignedBigInteger('virtual_seat_id')->nullable();
            $table->string('name');
            $table->string('company_name')->nullable();
            $table->double('capital')->nullable();
            $table->double('paid')->nullable();
            $table->double('price_without_vat');
            $table->double('price_with_vat');
            $table->double('quantity');
            $table->double('price_mj_without_vat');
            $table->double('price_mj_with_vat');
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('mj_id')->references('id')->on('enum__mj');
            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('seat_id')->references('id')->on('enum__company_seats');
            // $table->foreign('virtual_seat_id')->references('id')->on('virtual_seats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
};
