<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApuestaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/apuestas', [ApuestaController::class, 'index'])->name('apuestas.index');
Route::get('/apuestas/juegos-mayores-a-3', [ApuestaController::class, 'apuestasDeJuegosMayoresA3'])->name('apuestas.juegos_mayores_a_3');
Route::get('/apuestas/comparar-dinero', [ApuestaController::class, 'compararDinero'])->name('apuestas.comparar_dinero');
Route::get('/apuestas/buscar', [ApuestaController::class, 'buscar'])->name('apuestas.buscar');
Route::post('/apuestas', [ApuestaController::class, 'store'])->name('apuestas.store');
Route::get('/apuestas/create', [ApuestaController::class, 'create'])->name('apuestas.create');
