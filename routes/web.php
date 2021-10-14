<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('test', function(){
    return "testeando...";
});


Route::get('cliente/crear', function(){
    return "creando cliente";
});

Route::get('cliente/editar/{cod?}/{otro?}', function($cod = null, $otro = null){
    return "Editando cliente del código: " . $cod . " otro: " . $otro;
});


 Route::get('ejemplo-backup', function(){
     return view('ejemplo');
 });


Route::view('xyz', 'ejemplo');


Route::fallback(function(){
    return "Página no encontrada";
});


// Route::fallback(function(){
//     return "Página no encontrada";
// });


Route::get('testeo', function(){
    return view('testeo');
});

























