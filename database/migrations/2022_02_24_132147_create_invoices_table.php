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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('supplier_id')->nullable();
            $table->unsignedBigInteger('purchaser_id')->nullable();
            $table->unsignedBigInteger('type_payment_id')->nullable();
            $table->unsignedBigInteger('bank_account_id')->nullable();
            $table->unsignedBigInteger('vat_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('number');
            $table->dateTime('issue_date_at');
            $table->dateTime('due_date_at');
            $table->string('vs')->nullable();
            $table->string('ss')->nullable();
            $table->longText('note')->nullable();
            $table->double('price_without_vat');
            $table->double('price_with_vat');
            $table->tinyInteger('is_paid');
            $table->dateTime('paid_date_at')->nullable();
            $table->timestamps();
            $table->foreign('supplier_id')->references('id')->on('suppliers');
            $table->foreign('purchaser_id')->references('id')->on('companies');
            $table->foreign('type_payment_id')->references('id')->on('enum__type_payments');
            $table->foreign('bank_account_id')->references('id')->on('enum__bank_accounts');
            $table->foreign('vat_id')->references('id')->on('enum__vat');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
};
