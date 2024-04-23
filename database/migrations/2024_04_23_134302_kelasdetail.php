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
        Schema::create('kelasdetail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kelasid');
            $table->unsignedBigInteger('guruid');
            $table->unsignedBigInteger('siswaid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelasdetail');
    }
};
