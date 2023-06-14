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
        Schema::create('bank_accounts', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('number');
            $table->double('available_balance', 10, 2)->default(0.0);
            $table->double('ledger_balance', 10, 2)->default(0.0);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('bank_id');
            $table->unsignedBigInteger('bank_location_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('bank_id')->references('id')->on('banks');
            $table->foreign('bank_location_id')->references('id')->on('bank_locations');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_accounts');
    }
};
