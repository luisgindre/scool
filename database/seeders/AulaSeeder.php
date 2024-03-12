<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aulas')->truncate();
        DB::table('aulas')->insert([

            [ 'nombre' => 'Uno', 'codigo' => 'Uno', 'piso' => 'PB' ],
            [ 'nombre' => 'Dos', 'codigo' => 'Dos', 'piso' => 'PB' ],
            [ 'nombre' => 'Tres', 'codigo' => 'Tres', 'piso' => 'PB' ],
            [ 'nombre' => 'Cuatro', 'codigo' => 'Cuatro', 'piso' => 'PB' ],
            [ 'nombre' => 'Cinco', 'codigo' => 'Cinco', 'piso' => 'Primero' ],
            [ 'nombre' => 'Seis', 'codigo' => 'Seis', 'piso' => 'Priemro' ],
            [ 'nombre' => 'Siete', 'codigo' => 'Siete', 'piso' => 'Primero' ],
            [ 'nombre' => 'Ocho', 'codigo' => 'Ocho', 'piso' => 'Segundo' ],
            [ 'nombre' => 'Nueve', 'codigo' => 'Nueve', 'piso' => 'Segundo' ],
            [ 'nombre' => 'Diez', 'codigo' => 'Diez', 'piso' => 'Segundo' ],
         
            
            ]);
    }
}
