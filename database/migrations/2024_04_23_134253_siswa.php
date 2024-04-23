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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id('siswaid');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('nama');
            $table->string('email')->unique();
            $table->integer('HP');
            $table->integer('level');
            $table->tinyInteger('character');
            $table->tinyInteger('sound_effect');
            $table->tinyInteger('background_effect');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sisw');
    }
};
