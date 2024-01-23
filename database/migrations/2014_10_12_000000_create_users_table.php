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
            $table->foreignId('est_civil');
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->string('email')->unique();
            $table->string('email_inst');
            $table->string('password');
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('fecha_nacimiento'); 
            $table->string('dni');
            $table->string('cuil'); 
            $table->string('sexo'); 
            $table->string('nacionalidad');
            $table->string('cel',20);
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            /* $table->string('us_domicilio');
            $table->string('us_localidad');
            $table->string('us_provincia',100);
            $table->varchar('us_cod_postal',20);
            $table->varchar('us_telefono',20); */
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
