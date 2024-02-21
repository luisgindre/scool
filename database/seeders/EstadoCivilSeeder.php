<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoCivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estado_civiles')->truncate();
        $estados = [
            ['nombre' => 'Soltero/a'],
            ['nombre' =>  'Casado/a'],
            ['nombre' =>  'Divorciado/a'],
        
        ];

        DB::table('estado_civiles')->insert($estados);
    }
}
