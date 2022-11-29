<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
//ruta cargos
Route::get('/api/cargos/index',[App\Http\Controllers\CargosController::class,'index']);
Route::get('/api/cargos/getSelect',[App\Http\Controllers\CargosController::class,'getSelect']);
Route::post('/api/cargos/guardar',[App\Http\Controllers\CargosController::class,'store']);
Route::put('/api/cargos/actualizar',[App\Http\Controllers\CargosController::class,'update']);
Route::delete('/api/cargos/eliminar',[App\Http\Controllers\CargosController::class,'destroy']);


Auth::routes();

Route::get('/api/productos/index', [App\Http\Controllers\ProductosController::class, 'index']);
Route::get('/api/productos/getSelect', [App\Http\Controllers\ProductosController::class, 'getSelect']);
Route::post('/api/productos/guardar', [App\Http\Controllers\ProductosController::class, 'store']);
Route::put('/api/productos/actualizar', [App\Http\Controllers\ProductosController::class, 'update']);
Route::delete('/api/productos/eliminar', [App\Http\Controllers\ProductosController::class, 'destroy']);

Auth::routes();

Route::get('/api/personas/index', [App\Http\Controllers\PersonasController::class, 'index']);
Route::get('/api/personas/getSelect', [App\Http\Controllers\PersonasController::class, 'getSelect']);
Route::post('/api/personas/guardar', [App\Http\Controllers\PersonasController::class, 'store']);
Route::put('/api/personas/actualizar', [App\Http\Controllers\PersonasController::class, 'update']);
Route::delete('/api/personas/eliminar', [App\Http\Controllers\PersonasController::class, 'destroy']);

Auth::routes();

Route::get('/api/ingresos/index', [App\Http\Controllers\IngresosController::class, 'index']);
Route::get('/api/ingresos/getSelect', [App\Http\Controllers\IngresosController::class, 'getSelect']);
Route::post('/api/ingresos/guardar', [App\Http\Controllers\IngresosController::class, 'store']);
Route::put('/api/ingresos/actualizar', [App\Http\Controllers\IngresosController::class, 'update']);
Route::delete('/api/ingresos/eliminar', [App\Http\Controllers\IngresosController::class, 'destroy']);

Auth::routes();

Route::get('/api/Ubicaciones/index', [App\Http\Controllers\UbicacionesController::class, 'index']);
Route::get('/api/Ubicaciones/getSelect', [App\Http\Controllers\UbicacionesController::class, 'getSelect']);
Route::post('/api/Ubicaciones/guardar', [App\Http\Controllers\UbicacionesController::class, 'store']);
Route::put('/api/Ubicaciones/actualizar', [App\Http\Controllers\UbicacionesController::class, 'update']);
Route::delete('/api/Ubicaciones/eliminar', [App\Http\Controllers\UbicacionesController::class, 'destroy']);

Auth::routes();

Route::get('/api/Despachos/index', [App\Http\Controllers\DespachosController::class, 'index']);
Route::get('/api/Despachos/getSelect', [App\Http\Controllers\DespachosController::class, 'getSelect']);
Route::post('/api/Despachos/guardar', [App\Http\Controllers\DespachosController::class, 'store']);
Route::put('/api/Despachos/actualizar', [App\Http\Controllers\DespachosController::class, 'update']);
Route::delete('/api/Despachos/eliminar', [App\Http\Controllers\DespachosController::class, 'destroy']);
