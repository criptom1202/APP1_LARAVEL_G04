<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CargoController;

Route::prefix('intranet')->group(function(){

    // Route::get('cargo/index', function(){
    //     return "index de cargo";
    // });
    
    // Route::get('cargo/create', function(){
    //     return "creación de cargos";
    // });  
  
    // Route::get('cargos', [CargoController::class, 'index'])->name('cargo.index');
    // Route::get('cargos/crear', [CargoController::class, 'create'])->name('cargo.create');
    // Route::get('cargos/edit/{cargo}', [CargoController::class, 'edit'])->name('cargo.edit');
    // Route::get('cargos/show/{cargo}', [CargoController::class, 'show'])->name('cargo.show');

    // Route::post('cargo/store', [CargoController::class, 'store'])->name('cargo.store');
    // Route::put('cargo/update/{cargo}', [CargoController::class, 'update'])->name('cargo.update');
    // Route::delete('cargo/destroy/{cargo}',  [CargoController::class, 'destroy'])->name('cargo.destroy');

    Route::resource('cargos', CargoController::class)->names('cargo');

});









