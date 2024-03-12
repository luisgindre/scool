<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cursos')->truncate();
        DB::table('cursos')->insert([
            [ 'nombre' => '1A', 'nivel' => 1, 'turno' => 'Completo', 'anio_vigencia' => 2024, ],
            [ 'nombre' => '1B', 'nivel' => 1, 'turno' => 'Completo', 'anio_vigencia' => 2024, ],
            [ 'nombre' => '1C', 'nivel' => 1, 'turno' => 'Completo', 'anio_vigencia' => 2024, ],
            [ 'nombre' => '1D', 'nivel' => 1, 'turno' => 'Completo', 'anio_vigencia' => 2024, ],
            [ 'nombre' => '2A', 'nivel' => 2, 'turno' => 'Completo', 'anio_vigencia' => 2024, ],
            [ 'nombre' => '2B', 'nivel' => 2, 'turno' => 'Completo', 'anio_vigencia' => 2024, ],
            [ 'nombre' => '2C', 'nivel' => 2, 'turno' => 'Completo', 'anio_vigencia' => 2024, ],
            [ 'nombre' => '2D', 'nivel' => 2, 'turno' => 'Completo', 'anio_vigencia' => 2024, ],
            [ 'nombre' => '3A', 'nivel' => 3, 'turno' => 'Completo', 'anio_vigencia' => 2024, ],
            [ 'nombre' => '3B', 'nivel' => 3, 'turno' => 'Completo', 'anio_vigencia' => 2024, ],
            [ 'nombre' => '3C', 'nivel' => 3, 'turno' => 'Completo', 'anio_vigencia' => 2024, ],
            [ 'nombre' => '3D', 'nivel' => 3, 'turno' => 'Completo', 'anio_vigencia' => 2024, ],
            [ 'nombre' => '4A', 'nivel' => 4, 'turno' => 'Completo', 'anio_vigencia' => 2024, ],
            [ 'nombre' => '4B', 'nivel' => 4, 'turno' => 'Completo', 'anio_vigencia' => 2024, ],
            [ 'nombre' => '4C', 'nivel' => 4, 'turno' => 'Completo', 'anio_vigencia' => 2024, ],
            [ 'nombre' => '4D', 'nivel' => 4, 'turno' => 'Completo', 'anio_vigencia' => 2024, ],
            [ 'nombre' => '5A', 'nivel' => 5, 'turno' => 'Completo', 'anio_vigencia' => 2024, ],
            [ 'nombre' => '5B', 'nivel' => 5, 'turno' => 'Completo', 'anio_vigencia' => 2024, ],
            [ 'nombre' => '5C', 'nivel' => 5, 'turno' => 'Completo', 'anio_vigencia' => 2024, ],
            [ 'nombre' => '5D', 'nivel' => 5, 'turno' => 'Completo', 'anio_vigencia' => 2024, ],
            [ 'nombre' => '6A', 'nivel' => 6, 'turno' => 'Completo', 'anio_vigencia' => 2024, ],
            [ 'nombre' => '6B', 'nivel' => 6, 'turno' => 'Completo', 'anio_vigencia' => 2024, ],
            [ 'nombre' => '6C', 'nivel' => 6, 'turno' => 'Completo', 'anio_vigencia' => 2024, ],
            [ 'nombre' => '6D', 'nivel' => 6, 'turno' => 'Completo', 'anio_vigencia' => 2024, ],
            
        ]);
    }
}


