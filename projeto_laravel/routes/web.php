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
Route::get('/login', [DocumentoController::class, 'login'])->name('login');
Route::get('/logout', [DocumentoController::class, 'logout'])->name('logout');
Route::get('/perfil', [UsuarioController::class, 'index'])->name('perfil');

Route::middleware('validasessao')->group(function(){
    Route::post('/documentos/salvar', [DocumentoController::class, 'store'])->name('documentos.store');
    Route::delete('/documentos/remover/{id}', [DocumentoController::class, 'destroy'])->name('documentos.destroy');
});

Route::get('/documentos/exibir/{id}', [DocumentoController::class, 'show'])->name('documentos.show');
Route::get('/documentos/novo', [DocumentoController::class, 'create'])->name('documentos.create');
Route::get('/assinaturas', [AssinaturaController::class, 'index'])->name('assinaturas.index');
Route::get('/assinaturas/exibir/{id}', [AssinaturaController::class, 'show'])->name('assinaturas.show');
Route::get('/assinaturas/novo', [AssinaturaController::class, 'create'])->name('assinaturas.create');
Route::post('/assinaturas/salvar', [AssinaturaController::class, 'store'])->name('assinaturas.store');
Route::delete('assinaturas/remover/{id}', [AssinaturaController::class, 'destroy'])->name('assinaturas.destroy');
