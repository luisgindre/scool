<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema; 

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('asignaturas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });

        // Cargar datos estáticos
        DB::table('asignaturas')->insert([
            [ 'nombre' => 'Administración y Gestión de Bases de Datos' ],
            [ 'nombre' => 'Algortimos y Estructura de Datos' ],
            [ 'nombre' => 'Algortimos y Programación' ],
            [ 'nombre' => 'Aquitectura de computadoras' ],
            [ 'nombre' => 'Artes' ],
            [ 'nombre' => 'Automatización' ],
            [ 'nombre' => 'Automatización Hidraúlica' ],
            [ 'nombre' => 'Biología' ],
            [ 'nombre' => 'Ciencias Tecnología y Sociedad' ],
            [ 'nombre' => 'Construcción Ciudadana' ],
            [ 'nombre' => 'Control de Máquinas y Accionamiento' ],
            [ 'nombre' => 'Desarrollo de dispositivos Mecatrónicos' ],
            [ 'nombre' => 'Desarrollo de sistemas' ],
            [ 'nombre' => 'Diseño de Software' ],
            [ 'nombre' => 'Diseño Multimedia' ],
            [ 'nombre' => 'Diseño Tecnológico y Fabricación' ],
            [ 'nombre' => 'Dispositivos Electrónicos Programables' ],
            [ 'nombre' => 'Economía' ],
            [ 'nombre' => 'Educaciónn Física' ],
            [ 'nombre' => 'Electrónica de Potencia' ],
            [ 'nombre' => 'Electrónica Digital' ],
            [ 'nombre' => 'Electrónica y Circuitos Eléctricos' ],
            [ 'nombre' => 'Física' ],
            [ 'nombre' => 'Físico Química' ],
            [ 'nombre' => 'Geografía' ],
            [ 'nombre' => 'Gestión de la Producción' ],
            [ 'nombre' => 'Gestión de las organizaciones' ],
            [ 'nombre' => 'Historia' ],
            [ 'nombre' => 'Lengua' ],
            [ 'nombre' => 'Lengua Extrannjera Inglés' ],
            [ 'nombre' => 'Lógica Computacional' ],
            [ 'nombre' => 'Matemáticas' ],
            [ 'nombre' => 'Pensamientos Computacional' ],
            [ 'nombre' => 'Programación Web' ],
            [ 'nombre' => 'Química' ],
            [ 'nombre' => 'Redes' ],
            [ 'nombre' => 'Redes y Comunicación' ],
            [ 'nombre' => 'Redes y Datos' ],
            [ 'nombre' => 'Redes y Sistemas de Comunicación' ],
            [ 'nombre' => 'Sistemas Embebidos' ],
            [ 'nombre' => 'Sistemas Mecánicos' ],
            [ 'nombre' => 'Sistemas Operativos y Redes' ],
            [ 'nombre' => 'Sistemas Tecnológicos' ],
            [ 'nombre' => 'Taller de Proyecto' ],
            [ 'nombre' => 'Tecnologías de Control' ],
            [ 'nombre' => 'Tecnologías de la Computación' ],
            [ 'nombre' => 'Tecnologías de la Fabricación' ],
            [ 'nombre' => 'Tecnologías de la Representación' ],
            [ 'nombre' => 'Tecnologías de los materiales' ],
            [ 'nombre' => 'Trabajo y Sociedad' ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignaturas');
    }
};
