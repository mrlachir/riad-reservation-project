<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id('review_id');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('room_id')->constrained('rooms')->onDelete('cascade');
            $table->integer('rating');
            $table->text('review_text');
            $table->dateTime('review_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }
};