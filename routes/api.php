<?php

use App\Http\Controllers\api\categoriasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\api\pedidosController;
use App\Http\Controllers\api\productosController;
use App\Http\Controllers\api\usuariosController;
use App\Http\Controllers\loginController;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/

//Rutas para productos
Route::get('/productos', [productosController::class, 'index']);

Route::get('/productos/{id}', [productosController::class, 'show']);

Route::post('/productos', [productosController::class, 'store']);

Route::put('/productos/{id}', [productosController::class, 'update']);

Route::delete('/productos/{id}', [productosController::class, 'destroy']);

//Rutas para datos de usuario
Route::get('/usuarios', [usuariosController::class, 'index']);

Route::get('/usuarios/{id}', [usuariosController::class, 'show']);

Route::post('/usuarios', [usuariosController::class, 'store']);

Route::put('/usuarios/{id}', [usuariosController::class, 'update']);

Route::delete('/usuarios/{id}', [usuariosController::class, 'destroy']);

//Rutas para datos del pedido
Route::get('/pedidos', [pedidosController::class, 'index']);

Route::get('/pedidos/{id}', [pedidosController::class, 'show']);

Route::post('/pedidos', [pedidosController::class, 'store']);

Route::put('/pedidos/{id}', [pedidosController::class, 'update']);

Route::delete('/pedidos/{id}', [pedidosController::class, 'destroy']);

//Rutas para categorias
Route::get('/categorias', [categoriasController::class, 'index']);

Route::get('/categorias/{id}', [categoriasController::class, 'show']);

Route::post('/categorias', [categoriasController::class, 'store']);

Route::put('/categorias/{id}', [categoriasController::class, 'update']);

Route::delete('/categorias/{id}', [categoriasController::class, 'destroy']);

//Ruta para el login

Route::post('/login', [loginController::class, 'store']);