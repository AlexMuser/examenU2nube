<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\ClasificacionController;
use App\Http\Controllers\PeliculasController;

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

Route::resource('genero', GeneroController::class);
Route::resource('clasificacion', ClasificacionController::class);
Route::resource('peliculas', PeliculasController::class);

Route::get('/', function () {
    return view('welcome');
});