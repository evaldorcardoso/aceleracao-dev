<?php

use App\Http\Controllers\AssinaturaController;
use App\Http\Controllers\DocumentoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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
    return view('inicio');
})->name('home');
Route::get('/perfil', [UsuarioController::class, 'index'])->name('perfil');
Route::get('/documentos/exibir/{id}', [DocumentoController::class, 'show'])->name('documentos.show');
Route::get('/documentos/novo', [DocumentoController::class, 'create'])->name('documentos.create');
Route::post('/documentos/salvar', [DocumentoController::class, 'store'])->name('documentos.store');
Route::get('/assinaturas', [AssinaturaController::class, 'index'])->name('assinaturas.index');
Route::get('/assinaturas/{id}', [AssinaturaController::class, 'show'])->name('assinaturas.show');
