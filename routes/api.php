<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {
Route::get('all', [\App\Http\Controllers\UserLogin::class, 'index']);
Route::get('user', [\App\Http\Controllers\UserLogin::class, 'user']);
Route::post('store', [\App\Http\Controllers\UserLogin::class, 'store']);
Route::post('update/{id}', [\App\Http\Controllers\UserLogin::class, 'update']);
Route::post('delete/{id}', [\App\Http\Controllers\UserLogin::class, 'delete']);
Route::post('logout', [\App\Http\Controllers\UserLogin::class, 'logout']);
});

Route::post('login', [\App\Http\Controllers\UserLogin::class, 'login']);


