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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asignatura_id');
            $table->foreignId('aula_id');
            $table->string('descripcion');
            $table->string('anio');
            $table->string('trimestre');
            $table->string('horas_catedra');
            $table->string('nivel');
            $table->string('plan_de_estudio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
