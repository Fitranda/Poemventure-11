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
        Schema::create('guru', function (Blueprint $table) {
            $table->id('guruid');
            $table->string('username')->unique();
            $table->string('nama');
            $table->string('password');
            $table->string('email')->unique();
            $table->integer('no_telp');
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
        Schema::dropIfExists('guru');
    }
};
