<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampanasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\InscripcionesController;

Route::get('/', [CampanasController::class, 'ultimasCampanas']);

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/campañas', [CampanasController::class, 'index'])->name('campañas');
Route::get('/detalles-camapaña/{id}', [CampanasController::class, 'show'])->name('detalles.campana');
Route::get('/productos', [ProductosController::class, 'index'])->name('productos');
Route::resource('campanas', CampanasController::class);

Route::post('/inscripciones', [InscripcionesController::class, 'store'])->name('inscripciones.store');
