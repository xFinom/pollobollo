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
        Schema::create('gif_deliveries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('botarga_id')->constrained();
            $table->foreignId('client_id')->constrained();
            $table->double('price');
            $table->date('date');
            $table->time('time');
            $table->boolean('courtesyGift');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gif_deliveries');
    }
};
