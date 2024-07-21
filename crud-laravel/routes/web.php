<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\Controller;
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

// Route::get('/usuarios', '\App\Http\Controllers\UsuariosController@index');
// Route::get('/usuarios/create', '\App\Http\Controllers\UsuariosController@create');

Route::resource('usuarios', '\App\Http\Controllers\UsuariosController');

// Route::get('usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');
// Route::get('usuarios/create', [UsuariosController::class, 'create'])->name('usuarios.create');
// Route::post('usuarios', [UsuariosController::class, 'store'])->name('usuarios.store');
// Route::get('usuarios/{id}', [UsuariosController::class, 'show'])->name('usuarios.show');
// Route::get('usuarios/{id}/edit', [UsuariosController::class, 'edit'])->name('usuarios.edit');
// Route::put('usuarios/{id}', [UsuariosController::class, 'update'])->name('usuarios.update');
// Route::delete('usuarios/{id}', [UsuariosController::class, 'destroy'])->name('usuarios.destroy');
