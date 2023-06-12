<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pdf', [App\Http\Controllers\ProyectoController::class, 'getPDF'])->name('proyecto.pdf');

Route::get('/proyectos/create', [ProyectoController::class, 'create'])->name('proyectos.create');
Route::post('/proyecto', [ProyectoController::class, 'store'])->name('proyecto.store');
Route::get('/proyecto', [ProyectoController::class, 'index'])->name('proyecto.index');
Route::delete('/proyectos/{proyecto}', [ProyectoController::class, 'destroy'])->name('proyectos.destroy');
Route::get('/proyectos/{proyecto}', [ProyectoController::class, 'show'])->name('proyectos.show');
Route::get('/proyectos/{proyecto}/edit', [ProyectoController::class, 'edit'])->name('proyectos.edit');
Route::get('/proyectos', [ProyectoController::class, 'index'])->name('proyectos.index');
Route::put('/proyectos/{proyecto}', [ProyectoController::class, 'update'])->name('proyectos.update');
Route::get('/proyectos/{proyecto}/edit', [ProyectoController::class, 'edit'])->name('proyectos.edit');
Route::put('/proyectos/{id}', [ProyectoController::class, 'update'])->name('proyectos.update');
Route::patch('/proyectos/{id}', [ProyectoController::class, 'update'])->name('proyectos.update');










Route::get('/home/proyectos', [App\Http\Controllers\ProyectoController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
