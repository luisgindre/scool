<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CondicionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('condiciones')->truncate();
        DB::table('condiciones')->insert([

            [ 'nombre' => 'Regular' ],
            [ 'nombre' => 'Libre' ],
            
            ]);
    }
}
