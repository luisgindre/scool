<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/localidades', function () {
    
    
    $json = file_get_contents('../app/localidades.json', true, stream_context_create(array('http' => array('header' => "Accept-Charset: utf-8"))));
    $array = json_decode($json,true);
  
    foreach($array['departamentos'] as $localidad){
        $aux['id'] = $localidad['id'];
        $aux['nombre' ] = $localidad['nombre'];
        $aux['nombre_completo'] = $localidad['nombre_completo'];
        $aux['provincia_id'] = $localidad['provincia']['id'];
        $aux['lon'] = $localidad['centroide']['lon'];
        $aux['lat'] = $localidad['centroide']['lat'];
        $aux['categoria'] = $localidad['categoria'];
        

        $loc_nuevo [] = $aux;
        /* $loc_nuevo[$localidad['provincia']['id']] = $localidad['provincia']['nombre']; */
    }
    $vect='';
    foreach($loc_nuevo as $key1 => $value1) {
       
        $vect .= '[';
        foreach($value1 as $key2 => $value2){
           
            $aux = "'$key2' => '$value2', ";
            $vect .= $aux;
        }
        
        $vect .= '],\r';
    }
    dd($vect);

    return dd($loc_nuevo);
});