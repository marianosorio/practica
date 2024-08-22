<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiposAsientosController;
use App\Http\Controllers\VueloController;


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

//TiposAsientos
Route::get('/tiposAsientos', [TiposAsientosController::class, 'inicioTipoAsiento'])->name('tipos.asientos.inicio');
Route::get('/tiposAsientos/mostrar', [TiposAsientosController::class, 'redirectToTiposAsientosMostrar'])->name('tipos.asientos.mostrar');
Route::get('/tiposAsientos/agregar', [TiposAsientosController::class, 'redirectToTiposAsientosAgregar'])->name('tipos.asientos.agregar');
Route::get('/tiposAsientos/guardar',[TiposAsientosController::class, 'guardarTipoAsiento']->name('tipos.asientos.guardar'));

//vuelos:
//Route::get('/vuelo', [VueloController::class, 'inicioVuelo'])->name('vuelos.inicio');