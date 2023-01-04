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

Route::get('/api/teams', [App\Http\Controllers\TeamController::class, 'list']);
Route::post('/api/teams', [App\Http\Controllers\TeamController::class, 'store']);
Route::get('/api/teams/{id}', [App\Http\Controllers\TeamController::class, 'show']);
Route::put('/api/teams/{id}', [App\Http\Controllers\TeamController::class, 'update']);
Route::delete('/api/teams/{id}', [App\Http\Controllers\TeamController::class, 'delete']);
Route::get('/api/juegos', [App\Http\Controllers\JuegosController::class, 'delete']);
