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
        Schema::create('curso_evaluacion_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('curso_id');
            $table->foreignId('evaluacion_id');
            $table->foreignId('user_id');
            $table->integer('cuantitativa');
            $table->foreignId('cualitativa');
            $table->string('rubricas');
            $table->integer('calificacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calificacions');
    }
};
