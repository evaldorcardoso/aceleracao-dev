<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\{DocumentoController, LoginController, AssinaturaController, AnaliseController, RelatorioDeAnaliseController};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [LoginController::class, 'login'])->name('login');

Route::group(["middleware" => ["jwt-auth"]], function(){
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/refresh', [LoginController::class, 'refresh'])->name('refresh');
    Route::apiResource('documentos', DocumentoController::class);
    Route::apiResource('assinaturas', AssinaturaController::class);
    Route::apiResource('analises', AnaliseController::class);
    Route::get('/relatorio', [RelatorioDeAnaliseController::class, 'index'])->name('relatorio');
});
