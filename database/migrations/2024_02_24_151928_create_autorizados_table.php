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
        Schema::create('autorizados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('email')->nullable();
            $table->string('dni')->nullable();
            $table->string('photo_path', 2048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autorizados');
    }
};
