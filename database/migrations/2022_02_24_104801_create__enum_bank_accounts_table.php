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
        Schema::create('enum__bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('iban');
            $table->string('swift');
            $table->string('bank_number')->nullable();
            $table->string('bank_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enum__bank_accounts');
    }
};
