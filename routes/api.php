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

Route::post('register',[\App\Http\Controllers\AuthController::class, 'register']);

Route::post('login',[\App\Http\Controllers\AuthController::class, 'login']);

Route::post('addNews',[\App\Http\Controllers\noticiasController::class, 'addNews']);

Route::get('noticias',[\App\Http\Controllers\noticiasController::class, 'index']);

Route::get('noticia/',[\App\Http\Controllers\noticiasController::class, 'find']);

Route::post('addModel',[\App\Http\Controllers\modelosController::class, 'addModel']);

Route::get('modelos',[\App\Http\Controllers\modelosController::class, 'index']);

Route::get('modelo/',[\App\Http\Controllers\modelosController::class, 'find']);

Route::post('articulos',[\App\Http\Controllers\ArticulosController::class, 'findArray']);

Route::post('addClothing',[\App\Http\Controllers\equipamientosController::class, 'addClothing']);

Route::get('equipamientos/',[\App\Http\Controllers\equipamientosController::class, 'index']);

Route::get('equipamiento/{id}',[\App\Http\Controllers\equipamientosController::class, 'find']);

Route::post('datosPersonales',[\App\Http\Controllers\datosPersonalesController::class, 'guardarDatosPersonales']);

Route::post('cargarDatosPersonales',[\App\Http\Controllers\datosPersonalesController::class, 'cargarDatosPersonales']);

Route::post('savePurchase',[\App\Http\Controllers\pedidosController::class, 'savePurchase']);

Route::post('Orders',[\App\Http\Controllers\pedidosController::class, 'FindOrders']);

Route::post('Order',[\App\Http\Controllers\pedidosController::class, 'FindOrder']);

Route::get('AllOrders',[\App\Http\Controllers\pedidosController::class, 'index']);

Route::post('Items',[\App\Http\Controllers\pedidosController::class, 'FindItems']);

Route::post('sendEmail',[\App\Http\Controllers\emailController::class, 'sendEmail']);

Route::post('actualizarPedido',[\App\Http\Controllers\pedidosController::class, 'actualizarPedido']);

//Route::get('resetPassword',[\App\Http\Controllers\AuthController::class, 'resetPassword']);

Route::middleware('auth:sanctum')->group(function (){
    Route::get('user',[\App\Http\Controllers\AuthController::class, 'user']);
    Route::post('logout',[\App\Http\Controllers\AuthController::class, 'logout']);
});


