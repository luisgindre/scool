<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('carreras')->truncate();
        DB::table('carreras')->insert([

            [ 'nombre' => 'Tic' ],
            [ 'nombre' => 'Mkt' ],
            [ 'nombre' => 'Meca' ],
            [ 'nombre' => 'Básico' ],
            
            ]);
    }
    
}
