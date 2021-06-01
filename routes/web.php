<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\EvaluacionController;
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

Route::get('/evaluacion', [EvaluacionController::class, 'index']);
Route::get('/realizar/evaluacion', [EvaluacionController::class, 'create'])->name('realizar');
Route::get('/realizar/evaluacion/registrarse', [EvaluacionController::class, 'registrarse'])->name('registrarse');
Route::get('/evaluacion/iniciar/sesion', [EvaluacionController::class, 'iniciar'])->name('iniciar');
Route::get('/evaluacion/show', [ProfesorController::class, 'show'])->name('show');
Route::get('/evaluacion/destroy', [ProfesorController::class, 'destroy'])->name('destroy');
Route::get('/evaluacion/edit', [ProfesorController::class, 'edit'])->name('edit');
Route::get('/profesores/store', [ProfesorController::class, 'store'])->name('store');
Route::get('/profesores/update', [ProfesorController::class, 'update'])->name('update');



/* Route::get('/evaluacion/profesores', [ProfesorController::class, 'index']);
Route::get('/profesores/show/{id}', [ProfesorController::class, 'show'])->name('show');
Route::get('/profesores/destroy/{id}', [ProfesorController::class, 'destroy'])->name('destroy');
Route::get('/profesores/edit/{user}', [ProfesorController::class, 'edit'])->name('edit');
Route::get('/profesores/create', [ProfesorController::class, 'create'])->name('create');
Route::get('/profesores/store', [ProfesorController::class, 'store'])->name('store');
Route::get('/profesores/update', [ProfesorController::class, 'update'])->name('update');
 */







