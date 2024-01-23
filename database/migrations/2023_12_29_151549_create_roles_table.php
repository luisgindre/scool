<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('descrip',50);
            $table->timestamps();
        });

        // Cargar datos estáticos
        DB::table('roles')->insert([
            [ 'descrip' => 'Administrador/a' ],
            [ 'descrip' => 'Alumna/o' ],
            [ 'descrip' => 'Autoridad' ],
            [ 'descrip' => 'Docente' ],
            [ 'descrip' => 'Familiar/Tutor' ],
            [ 'descrip' => 'Preceptoría' ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
