<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nombre' => 'Juan',
            'apellido' => 'Prueba',
            'email' => 'admin@admin',
            'password' => Hash::make('admin'),
            'user_id' => 1,
            'estado_civil_id' => 1,
            'email_inst' => 'admin@fce',
            'fecha_nacimiento' => '1983-11-16',
            'dni' => 11111111,
            'cuil' => 20111111119,
            'sexo' => 1,
            'pais_id' => 9,
            'provincia_id' => 1,
            'localidad_id' => 1,
            'telefono' => 123123123,
            'cel' => 123456789,
            'domicilio' => 'Cordoba 444',
            'cod_postal' => '465',
        ]);
    }
}
