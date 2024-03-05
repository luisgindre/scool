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
        DB::table('cursos')->insert([
            [ 'nombre' => 'Primero A', 'nivel' => 1, 'turno' => 'Mañana', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Primero B', 'nivel' => 1, 'turno' => 'Mañana', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Primero C', 'nivel' => 1, 'turno' => 'Mañana', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Primero D', 'nivel' => 1, 'turno' => 'Tarde', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Primero E', 'nivel' => 1, 'turno' => 'Tarde', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Segundo A', 'nivel' => 2, 'turno' => 'Mañana', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Segundo B', 'nivel' => 2, 'turno' => 'Mañana', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Segundo C', 'nivel' => 2, 'turno' => 'Mañana', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Segundo D', 'nivel' => 2, 'turno' => 'Tarde', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Segundo E', 'nivel' => 2, 'turno' => 'Tarde', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Tercero A', 'nivel' => 3, 'turno' => 'Mañana', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Tercero B', 'nivel' => 3, 'turno' => 'Mañana', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Tercero C', 'nivel' => 3, 'turno' => 'Mañana', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Tercero D', 'nivel' => 3, 'turno' => 'Tarde', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Tercero E', 'nivel' => 3, 'turno' => 'Tarde', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Cuarto A', 'nivel' => 4, 'turno' => 'Mañana', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Cuarto B', 'nivel' => 4, 'turno' => 'Mañana', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Cuarto C', 'nivel' => 4, 'turno' => 'Mañana', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Cuarto D', 'nivel' => 4, 'turno' => 'Tarde', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Cuarto E', 'nivel' => 4, 'turno' => 'Tarde', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Quinto A', 'nivel' => 5, 'turno' => 'Mañana', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Quinto B', 'nivel' => 5, 'turno' => 'Mañana', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Quinto C', 'nivel' => 5, 'turno' => 'Mañana', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Quinto D', 'nivel' => 5, 'turno' => 'Tarde', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Quinto E', 'nivel' => 5, 'turno' => 'Tarde', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Sexto A', 'nivel' => 6, 'turno' => 'Mañana', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Sexto B', 'nivel' => 6, 'turno' => 'Mañana', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Sexto C', 'nivel' => 6, 'turno' => 'Mañana', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Sexto D', 'nivel' => 6, 'turno' => 'Tarde', 'anio_vigencia' => 2024, ],
            [ 'nombre' => 'Sexto E', 'nivel' => 6, 'turno' => 'Tarde', 'anio_vigencia' => 2024, ],
        ]);
    }
}


