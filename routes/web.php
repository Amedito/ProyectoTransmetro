<?php

use App\Http\Controllers\AutobusController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DireccionResidenciumController;
use App\Http\Controllers\EstacioneController;
use App\Http\Controllers\EstacionesLineaController;
use App\Http\Controllers\GuardiasSeguridadController;
use App\Http\Controllers\HistorialEducativoController;
use App\Http\Controllers\LineaController;
use App\Http\Controllers\MunicipalidadeController;
use App\Http\Controllers\OperadoreController;
use App\Http\Controllers\ParqueoController;
use App\Http\Controllers\PilotoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('municipalidades', MunicipalidadeController::class);
Route::resource('pilotos', PilotoController::class);
Route::resource('historial-educativos', HistorialEducativoController::class);
Route::resource('direccion-residencia', DireccionResidenciumController::class);
Route::resource('contactos', ContactoController::class);
Route::resource('parqueos', ParqueoController::class);
Route::resource('lineas', LineaController::class);
Route::resource('autobuses', AutobusController::class);
Route::resource('operadores', OperadoreController::class);
Route::resource('guardias-seguridads', GuardiasSeguridadController::class);
Route::resource('estaciones', EstacioneController::class);
Route::resource('estaciones-lineas', EstacionesLineaController::class);