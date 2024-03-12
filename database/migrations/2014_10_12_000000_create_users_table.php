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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('current_team_id')->nullable();
            $table->foreignId('estado_civil_id');
            $table->foreignId('user_id');
            $table->unsignedBigInteger('legajo')->nullable()->unique();
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->string('fecha_nacimiento'); 
            $table->string('email')->unique();
            $table->string('email_inst');
            $table->string('dni');
            $table->string('cuil'); 
            $table->foreignId('sexo_id'); 
            $table->foreignId('pais_id');
            $table->foreignId('provincia_id',100);
            $table->foreignId('localidad_id')->nullable();
            $table->string('domicilio');
            $table->string('cod_postal',20);
            $table->string('telefono',20)->nullable();
            $table->string('cel',20);
            $table->string('turno',50)->nullable();
            $table->string('password');
            $table->string('profile_photo_path', 2048)->nullable();
            $table->boolean('esta_habilitado')->default(FALSE);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
