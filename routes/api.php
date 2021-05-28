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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

#User
Route::get('/user', [\App\Http\Controllers\UserController::class, 'show']);
Route::post('/register',[\App\Http\Controllers\UserController::class, 'register']);
Route::put('user/{id}', [\App\Http\Controllers\UserController::class, 'update']);
Route::delete('user/{id}', [\App\Http\Controllers\UserController::class, 'destroy']);
Route::get('/userid/{id}', [\App\Http\Controllers\UserController::class, 'getUserById']);
Route::get('/userdi/{id}', [\App\Http\Controllers\UserController::class, 'getUserByIdiscord']);
