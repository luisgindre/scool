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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->integer('legajo')->unique()->nullable();
            $table->string('libro')->nullable();
            $table->string('folio')->nullable();
            $table->string('proy_pedagogico')->nullable();
            $table->string('obra_social')->nullable();
            $table->string('plan')->nullable();
            $table->string('asociado_id')->nullable();
            $table->string('anio_actual')->default('Primero')->nullable();
            $table->string('estado_matriculacion')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
