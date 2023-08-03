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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sender_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('receiver_id')->nullable()->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->text('message');
            $table->boolean('status')->default(0);
            $table->timestamps();


        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
