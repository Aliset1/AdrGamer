<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/teams', [App\Http\Controllers\TeamController::class, 'list']);

Route::post('/teams', [App\Http\Controllers\TeamController::class, 'store']);

Route::get('/teams/{id}', [App\Http\Controllers\TeamController::class, 'show']);

Route::put('/teams/{id}', [App\Http\Controllers\TeamController::class, 'update']);

Route::delete('/teams/{id}', [App\Http\Controllers\TeamController::class, 'delete']);

Route::get('/games/inscriptionTotal', [App\Http\Controllers\GameController::class, 'CountInscripcionesByGame']);

Route::get('/games/inscriptionMax', [App\Http\Controllers\GameController::class, 'MaxInscritoByGame']);

Route::get('/games', [App\Http\Controllers\GameController::class, 'list']);

Route::get('/games/categoria/{id}', [App\Http\Controllers\GameController::class, 'listByCategory']);

Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'list']);

