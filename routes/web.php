<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampanasController;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/campañas', function () {
    return view('campañas');
});

Route::get('/productos', function () {
    return view('productos');
});

Route::resource('campanas', CampanasController::class);
