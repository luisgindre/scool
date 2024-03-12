<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatriculacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('matriculaciones')->truncate();
        DB::table('matriculaciones')->insert([

            [ 'nombre' => 'Matriculado/a' ],
            [ 'nombre' => 'Baja por Pase' ],
            [ 'nombre' => 'Egresado/a' ],
            
            ]);
    }
}
