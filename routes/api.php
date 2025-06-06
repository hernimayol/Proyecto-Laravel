<?php

use App\Http\Controllers\TiketController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\API\AuthController;


Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function (){ //Todo lo que entra acá, requiere si o si un Login, sino las rutas no responden
    //Route::get('/profile', [AuthController::class, 'profile']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('get-provincias', [ProvinciaController::class, 'index']); //Cuando alguien accede a la ruta get
});

//define la ruta de una peticion get, donde el 1er argumento es el endpoint de la ruta y el segundo

//Route::get('get-provincia-tiket/{id}', [ProvinciaController::class, 'getProvinciaTikets']);

// Solicitudes HTTP para Tikets
Route::get('get-tikets', [TiketController::class, 'index']);
Route::get('get-tiket/{id}', [TiketController::class, 'show']);
Route::post('set-tiket', [TiketController::class, 'store']);
Route::put('update-tiket/{id}', [TiketController::class, 'update']);
Route::delete('delete-tiket/{id}', [TiketController::class, 'destroy']);