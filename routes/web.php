<?php

use App\Http\Controllers\TareasController;
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

Route::get('/', [TareasController::class, 'index'])->name('tareas');

Route::post('/', [TareasController::class, 'store'])->name('tareas');

Route::get('/{id}', [TareasController::class, 'show'])->name('tareas-edit');

Route::patch('/{id}', [TareasController::class, 'update'])->name('tareas-update');

Route::delete('/{id}', [TareasController::class, 'destroy'])->name('tareas-destroy');