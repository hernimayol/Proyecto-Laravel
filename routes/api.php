<?php

use App\Http\Controllers\TiketController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinciaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
//define la ruta de una peticion get, donde el 1er argumento es el endpoint de la ruta y el segundo
Route::get('get-provincias', [ProvinciaController::class, 'index']); //Cuando alguien accede a la ruta get

// Solicitudes HTTP para Tikets
Route::get('get-tikets', [TiketController::class, 'index']);
Route::get('get-tiket/{id}', [TiketController::class, 'show']);
Route::post('set-tiket', [TiketController::class, 'store']);
Route::put('update-tiket/{id}', [TiketController::class, 'update']);
Route::delete('delete-tiket/{id}', [TiketController::class, 'destroy']);