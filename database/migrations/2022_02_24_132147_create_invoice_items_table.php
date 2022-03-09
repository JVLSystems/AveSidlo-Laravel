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
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('invoice_id')->nullable();
            $table->unsignedBigInteger('mj_id')->nullable();
            $table->unsignedBigInteger('vat_id')->nullable();
            $table->longText('name');
            $table->double('price_mj_without_vat')->nullable();
            $table->double('price_mj_with_vat')->nullable();
            $table->double('price_without_vat');
            $table->double('price_with_vat');
            $table->double('quantity');
            $table->timestamps();
            $table->foreign('invoice_id')->references('id')->on('invoices');
            $table->foreign('mj_id')->references('id')->on('enum__mj');
            $table->foreign('vat_id')->references('id')->on('enum__vat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_items');
    }
};
