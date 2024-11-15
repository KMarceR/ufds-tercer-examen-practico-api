<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//para los controladores
use App\Http\Controllers\PaisController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\ProductosController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Rutas protegidas
Route::middleware('auth:sanctum')->group(function () {
    // Rutas para gestionar la tabla Cliente
    Route::get('/cliente/select', [ClienteController::class, 'select' ]);
    Route::post('/cliente/store', [ClienteController::class, 'store' ]);
    Route::put('/cliente/update/{id}', [ClienteController::class, 'update' ]);
    Route::delete('/cliente/delete/{id}', [ClienteController::class, 'delete' ]);
    Route::get('/cliente/find/{id}', [ClienteController::class, 'find' ]);

    // Rutas para gestionar la tabla Categorias
    Route::get('/categorias/select', [CategoriasController::class, 'select']);
    Route::post('/categorias/store', [CategoriasController::class, 'store']);
    Route::put('/categorias/update/{id}', [CategoriasController::class, 'update']);
    Route::get('/categorias/find/{id}', [CategoriasController::class, 'find']);
    Route::delete('/categorias/delete/{id}', [CategoriasController::class, 'delete']);

    // Rutas para gestionar la tabla Marcas
    Route::get('/marcas/select', [MarcasController::class, 'select']);
    Route::post('/marcas/store', [MarcasController::class, 'store']);
    Route::put('/marcas/update/{id}', [MarcasController::class, 'update']);
    Route::get('/marcas/find/{id}', [MarcasController::class, 'find']);
    Route::delete('/marcas/delete/{id}', [MarcasController::class, 'delete']);

    // Rutas para gestionar la tabla Productos
    Route::get('/productos/select', [ProductosController::class, 'select']);
    Route::post('/productos/store', [ProductosController::class, 'store']);
    Route::put('/productos/update/{id}', [ProductosController::class, 'update']);
    Route::get('/productos/find/{id}', [ProductosController::class, 'find']);
    Route::delete('/productos/delete/{id}', [ProductosController::class, 'delete']);

    // Rutas para gestionar la tabla Pais
    Route::get('/pais/select', [PaisController::class, 'select' ]);
});

//Rutas para usuario
Route::post('/usuario/register', [UserController::class, 'register']);
Route::post('/usuario/login', [UserController::class, 'login']);