<?php

use App\Http\Controllers\api\billeteraController;
use App\Http\Controllers\api\categoriasController;
use App\Http\Controllers\api\direccionesController;
use App\Http\Controllers\api\favoritosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\api\pedidosController;
use App\Http\Controllers\api\productosController;
use App\Http\Controllers\api\usuariosController;
use App\Http\Controllers\api\loginController;
use App\Http\Controllers\api\loginMobileController;
use App\Http\Controllers\api\tarjetasController;

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
Route::get('/login', [loginController::class, 'index']);
Route::post('/login', [loginController::class, 'store']);

//Rutas para la billetera
Route::get('/billetera', [billeteraController::class, 'index']);
//EL ID QUE SE LE MANDA ES EL ID DEL USUARIO
Route::get('/billetera/{id}', [billeteraController::class, 'show']);
Route::post('/billetera', [billeteraController::class, 'store']);
//EL ID QUE SE LE MANDA ES EL ID DE LA BILLETERA
Route::delete('/billetera/{id}', [billeteraController::class, 'destroy']);

//Rutas para las direcciones
Route::get('/direcciones', [direccionesController::class, 'index']);
//EL ID QUE SE LE MANDA ES EL ID DEL USUARIO
Route::get('/direcciones/{id}', [direccionesController::class, 'show']);
Route::post('/direcciones', [direccionesController::class, 'store']);
//EL ID QUE SE LE MANDA ES EL ID DE LA DIRECCION
Route::put('/direcciones/{id}', [direccionesController::class, 'update']);
//EL ID QUE SE LE MANDA ES EL ID DE LA DIRECCION
Route::delete('/direcciones/{id}', [direccionesController::class, 'destroy']);

//Rutas para favoritos
Route::get('/favoritos', [favoritosController::class, 'index']);
//EL ID QUE SE LE MANDA ES EL ID DEL USUARIO
Route::get('/favoritos/{id}', [favoritosController::class, 'show']);
Route::post('/favoritos', [favoritosController::class, 'store']);
//EL ID QUE SE LE MANDA ES EL ID DEL PRODUCTO
Route::delete('/favoritos/{id}', [favoritosController::class, 'destroy']);

//Rutas para tarjetas
Route::get('/tarjetas', [tarjetasController::class, 'index']);
//EL ID QUE SE LE MANDA ES LA TARJETA
Route::get('/tarjetas/{id}', [tarjetasController::class, 'show']);
Route::post('/tarjetas', [tarjetasController::class, 'store']);
//EL ID QUE SE LE MANDA ES LA TARJETA
Route::put('/tarjetas/{id}', [tarjetasController::class, 'update']);
//EL ID QUE SE LE MANDA ES LA TARJETA
Route::delete('/tarjetas/{id}', [tarjetasController::class, 'destroy']);

//Rutas para carrito