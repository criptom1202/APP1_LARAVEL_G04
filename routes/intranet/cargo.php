<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CargoController;

Route::prefix('intranet')->group(function(){

    Route::get('cargo/index', function(){
        return "index de cargo";
    });
    
    Route::get('cargo/create', function(){
        return "creación de cargos";
    });  
  
    Route::get('cargos', [CargoController::class, 'index']);
    Route::get('cargos/create', [CargoController::class, 'create']);
    Route::get('cargos/edit/{id?}', [CargoController::class, 'edit']);

});









