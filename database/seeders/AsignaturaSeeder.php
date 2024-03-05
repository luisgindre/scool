<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cargar datos estáticos
        DB::table('asignaturas')->insert([
            [ 'nombre' => 'Lengua','ciclo' => '1','horas' => 6,'anio' => 1,'tipo_ciclo' => 'General' ],
            [ 'nombre' => 'Lengua','ciclo' => '1','horas' => 4,'anio' => 2,'tipo_ciclo' => 'General' ],
            [ 'nombre' => 'Lengua','ciclo' => '2','horas' => 4,'anio' => 3,'tipo_ciclo' => 'General' ],
            [ 'nombre' => 'Lengua','ciclo' => '2','horas' => 3,'anio' => 4,'tipo_ciclo' => 'General' ],
            [ 'nombre' => 'Lengua','ciclo' => '2','horas' => 3,'anio' => 5,'tipo_ciclo' => 'General' ],
            [ 'nombre' => 'Ingles','ciclo' => '1','horas' => 3,'anio' => 1,'tipo_ciclo' => 'General' ],
            [ 'nombre' => 'Ingles','ciclo' => '1','horas' => 3,'anio' => 2,'tipo_ciclo' => 'General' ],
            [ 'nombre' => 'Ingles','ciclo' => '2','horas' => 3,'anio' => 3,'tipo_ciclo' => 'General' ],
            [ 'nombre' => 'Ingles','ciclo' => '2','horas' => 3,'anio' => 4,'tipo_ciclo' => 'General' ],
            [ 'nombre' => 'Ingles','ciclo' => '2','horas' => 3,'anio' => 5,'tipo_ciclo' => 'General' ],
            [ 'nombre' => 'Historia','ciclo' => '1','horas' => 3,'anio' => 1,'tipo_ciclo' => 'General' ],
            [ 'nombre' => 'Historia','ciclo' => '1','horas' => 3,'anio' => 2,'tipo_ciclo' => 'General' ],
            [ 'nombre' => 'Historia','ciclo' => '2','horas' => 3,'anio' => 3,'tipo_ciclo' => 'General' ],
            [ 'nombre' => 'Economía','ciclo' => '2','horas' => 3,'anio' => 4,'tipo_ciclo' => 'General' ],
            [ 'nombre' => 'Trabajo y sociedad','ciclo' => '2','horas' => 3,'anio' => 6,'tipo_ciclo' => 'General' ],
            [ 'nombre' => 'Ciencia Tecnología y Sociedad','ciclo' => '2','horas' => 3,'anio' => 6,'tipo_ciclo' => 'General' ],
            [ 'nombre' => 'Construcción de la Ciudadanía','ciclo' => '1','horas' => 3,'anio' => 1,'tipo_ciclo' => 'General' ],
            [ 'nombre' => 'Construcción de la Ciudadanía','ciclo' => '1','horas' => 3,'anio' => 2,'tipo_ciclo' => 'General' ],
            [ 'nombre' => 'Construcción de la Ciudadanía','ciclo' => '2','horas' => 3,'anio' => 3,'tipo_ciclo' => 'General' ],
            [ 'nombre' => 'Espacio de Acompañamiento Artes','ciclo' => '1','horas' => 3,'anio' => 1,'tipo_ciclo' => 'General' ],
            [ 'nombre' => 'Espacio de Acompañamiento Artes','ciclo' => '1','horas' => 3,'anio' => 2,'tipo_ciclo' => 'General' ],
            [ 'nombre' => 'Educación Física','ciclo' => '1','horas' => 3,'anio' => 1,'tipo_ciclo' => 'General' ],
            [ 'nombre' => 'Educación Física','ciclo' => '1','horas' => 3,'anio' => 2,'tipo_ciclo' => 'General' ],
            [ 'nombre' => 'Educación Física','ciclo' => '2','horas' => 3,'anio' => 3,'tipo_ciclo' => 'General' ],
            [ 'nombre' => 'Educación Física','ciclo' => '2','horas' => 3,'anio' => 4,'tipo_ciclo' => 'General' ],
            [ 'nombre' => 'Educación Física','ciclo' => '2','horas' => 3,'anio' => 5,'tipo_ciclo' => 'General' ],
            [ 'nombre' => 'Biología','ciclo' => '1','horas' => 6,'anio' => 1,'tipo_ciclo' => 'Cientifico tecnologico' ],
            [ 'nombre' => 'Biología','ciclo' => '1','horas' => 5,'anio' => 2,'tipo_ciclo' => 'Cientifico tecnologico' ],
            [ 'nombre' => 'Biología','ciclo' => '2','horas' => 5,'anio' => 3,'tipo_ciclo' => 'Cientifico tecnologico' ],
            [ 'nombre' => 'Biología','ciclo' => '2','horas' => 5,'anio' => 4,'tipo_ciclo' => 'Cientifico tecnologico' ],
            [ 'nombre' => 'Biología','ciclo' => '2','horas' => 5,'anio' => 5,'tipo_ciclo' => 'Cientifico tecnologico' ],
            [ 'nombre' => 'Fisico Química','ciclo' => '1','horas' => 3,'anio' => 2,'tipo_ciclo' => 'Cientifico tecnologico' ],
            [ 'nombre' => 'Física','ciclo' => '2','horas' => 4,'anio' => 3,'tipo_ciclo' => 'Cientifico tecnologico' ],
            [ 'nombre' => 'Física','ciclo' => '2','horas' => 4,'anio' => 4,'tipo_ciclo' => 'Cientifico tecnologico' ],
            [ 'nombre' => 'Química','ciclo' => '2','horas' => 4,'anio' => 4,'tipo_ciclo' => 'Cientifico tecnologico' ],
            [ 'nombre' => 'Matemáticas','ciclo' => '1','horas' => 6,'anio' => 1,'tipo_ciclo' => 'Cientifico tecnologico' ],
            [ 'nombre' => 'Matemáticas','ciclo' => '1','horas' => 5,'anio' => 2,'tipo_ciclo' => 'Cientifico tecnologico' ],
            [ 'nombre' => 'Matemáticas','ciclo' => '2','horas' => 5,'anio' => 3,'tipo_ciclo' => 'Cientifico tecnologico' ],
            [ 'nombre' => 'Matemáticas','ciclo' => '2','horas' => 5,'anio' => 4,'tipo_ciclo' => 'Cientifico tecnologico' ],
            [ 'nombre' => 'Matemáticas','ciclo' => '2','horas' => 5,'anio' => 5,'tipo_ciclo' => 'Cientifico tecnologico' ],
            [ 'nombre' => 'Taller de Tecnologías de la Representación','ciclo' => '2','horas' => 4,'anio' => 3,'tipo_ciclo' => 'Cientifico tecnologico' ],
            [ 'nombre' => 'Gestión de las organizaciones','ciclo' => '2','horas' => 3,'anio' => 6,'tipo_ciclo' => 'Cientifico tecnologico' ],
            [ 'nombre' => 'Gestión de Procesos Productivos','ciclo' => '2','horas' => 4,'anio' => 6,'tipo_ciclo' => 'Cientifico tecnologico' ],
            [ 'nombre' => 'Taller Cuatrimestral Sistemas Tecnológicos','ciclo' => '1','horas' => 4,'anio' => 1,'tipo_ciclo' => 'Cientifico tecnologico' ],
            [ 'nombre' => 'Taller Cuatrimestral Sistemas Tecnológicos','ciclo' => '1','horas' => 4,'anio' => 2,'tipo_ciclo' => 'Cientifico tecnologico' ],
            [ 'nombre' => 'Taller Cuatrimestral Tecnologías de la fabricación','ciclo' => '1','horas' => 4,'anio' => 1,'tipo_ciclo' => 'Cientifico tecnologico' ],
            [ 'nombre' => 'Taller Cuatrimestral Tecnologías de la fabricación','ciclo' => '1','horas' => 4,'anio' => 2,'tipo_ciclo' => 'Cientifico tecnologico' ],
            [ 'nombre' => 'Taller Anual Pensamiennto Computacional','ciclo' => '1','horas' => 5,'anio' => 1,'tipo_ciclo' => 'Cientifico tecnologico' ],
            [ 'nombre' => 'Taller Anual Pensamiennto Computacional','ciclo' => '1','horas' => 5,'anio' => 2,'tipo_ciclo' => 'Cientifico tecnologico' ],
            [ 'nombre' => 'Taller Anual o cuatrimestral Tecnologías de Control','ciclo' => '2','horas' => 5,'anio' => 3,'tipo_ciclo' => 'Técnico Específico' ],
            [ 'nombre' => 'Taller Anual o cuatrimestral Algoritmos y Programación','ciclo' => '2','horas' => 5,'anio' => 3,'tipo_ciclo' => 'Técnico Específico' ],
            [ 'nombre' => 'Algoritmos y Programación','ciclo' => '2','horas' => 4,'anio' => 4,'tipo_ciclo' => 'Técnico Específico' ],
            [ 'nombre' => 'Automatización','ciclo' => '2','horas' => 6,'anio' => 4,'tipo_ciclo' => 'Técnico Específico' ],
            [ 'nombre' => 'Electrónica y circuitos eléctricos','ciclo' => '2','horas' => 4,'anio' => 4,'tipo_ciclo' => 'Técnico Específico' ],
            [ 'nombre' => 'Electrónica digital','ciclo' => '2','horas' => 4,'anio' => 4,'tipo_ciclo' => 'Técnico Específico' ],
            [ 'nombre' => 'Electrónica de Potencia','ciclo' => '2','horas' => 5,'anio' => 5,'tipo_ciclo' => 'Técnico Específico' ],
            [ 'nombre' => 'Tecnologías de los materiales','ciclo' => '2','horas' => 5,'anio' => 5,'tipo_ciclo' => 'Técnico Específico' ],
            [ 'nombre' => 'Sistemas Mecánicos','ciclo' => '2','horas' => 6,'anio' => 5,'tipo_ciclo' => 'Técnico Específico' ],
            [ 'nombre' => 'Dispositivos electrónicos programables','ciclo' => '2','horas' => 5,'anio' => 5,'tipo_ciclo' => 'Técnico Específico' ],
            [ 'nombre' => 'Diseño tecnológico y fabricación','ciclo' => '2','horas' => 6,'anio' => 5,'tipo_ciclo' => 'Técnico Específico' ],
            [ 'nombre' => 'Control de máquinas eléctricas y accionamientos','ciclo' => '2','horas' => 6,'anio' => 6,'tipo_ciclo' => 'Técnico Específico' ],
            [ 'nombre' => 'Automatización hidráulica','ciclo' => '2','horas' => 5,'anio' => 6,'tipo_ciclo' => 'Técnico Específico' ],
            [ 'nombre' => 'Desarrollo de dispositivos mecatrónicos','ciclo' => '2','horas' => 6,'anio' => 6,'tipo_ciclo' => 'Técnico Específico' ],
            [ 'nombre' => 'Redes y Comunicación','ciclo' => '2','horas' => 4,'anio' => 6,'tipo_ciclo' => 'Técnico Específico' ],
            [ 'nombre' => 'Sistemas Embebidos','ciclo' => '2','horas' => 6,'anio' => 6,'tipo_ciclo' => 'Técnico Específico' ],
            [ 'nombre' => 'Taller del Proyeto','ciclo' => '2','horas' => 5,'anio' => 6,'tipo_ciclo' => 'Práctica profesionalizante' ],
         ]);


    }
}
