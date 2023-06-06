<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cards', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('card_type_id');
            $table->unsignedBigInteger('currency_id');
            $table->double('available_balance', 10, 2)->default(0.0);
            $table->double('ledger_balance', 10, 2)->default(0.0);
            $table->string('name');
            $table->string('number');
            $table->string('month');
            $table->string('year');
            $table->string('cvv');
            $table->string('billing_address');
            $table->string('zip_code');
            $table->enum('status', ['good', 'frozen', 'terminated'])->default('good');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('card_type_id')->references('id')->on('card_types');
            $table->foreign('currency_id')->references('id')->on('currencies');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
