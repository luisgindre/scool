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
            $table->string('curso_id')->nullable();
            $table->foreignId('matriculacion_id')->nullable();
            $table->foreignId('condicion_id')->nullable();
            $table->foreignId('carrera_id')->nullable();
            $table->boolean('proy_pedagogico');
            $table->string('obra_social')->nullable();
            $table->string('plan')->nullable();
            $table->string('asociado_id')->nullable();
            
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
