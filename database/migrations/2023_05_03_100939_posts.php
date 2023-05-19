<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('title');
            $table->longText('description');
            $table->string('image_path');
            $table->timestamps();
            $table->rememberToken();
            $table->unsignedBigInteger('user_id');

            // Indicates the user ID
            $table->foreign('user_id')->references('id')->on('users');
            
        });
    }


    public function down(): void
    {
        
    }
};
