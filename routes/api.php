<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::post('login', [AuthController::class, 'login']);


Route::prefix('v1')->middleware('jwt.auth')->group(function () { // ACESSO SOMENTE COM TOKEN AUTENTICADO
    
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
});

Route::prefix('v1/admin')->group(function() { // ACESSO LIBERADO
    
    Route::apiresource('cliente', 'App\Http\Controllers\ClienteController');
    Route::apiresource('carro', 'App\Http\Controllers\CarroController');
    Route::apiresource('locacao', 'App\Http\Controllers\LocacaoController');
    Route::apiresource('marca', 'App\Http\Controllers\MarcaController');
    Route::apiresource('modelo', 'App\Http\Controllers\ModeloController');
});



